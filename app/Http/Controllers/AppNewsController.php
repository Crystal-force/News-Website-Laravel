<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Http\Model\NewsList;
use\App\Http\Model\UserRegister;
use\App\Http\Model\CategoryList;
use App\User;
use Illuminate\Support\Facades\Validator;
use Log;
use File;

class AppNewsController extends Controller
{
    public function newsList(Request $request) {
      $category_id = $request->id;
      // $newslist =array();
      $newslist = NewsList::with('categorylist')->where('category_list_id', $category_id)->where('status', '1')->orderBy('id', 'DESC')->get();
      $created_name = CategoryList::where('id', $category_id)->first();
      if(!is_null($newslist)) {
        return response()->json(['category'=>$created_name, 'data'=>$newslist]);
      }
      else {
        return response()->json(['data'=>'null']);
      }
    }

    public function newsdetail(Request $request) {
      $id = $request->id;
      $eachnews = NewsList::where('id', $id)->where('status', '1')->orderBy('id', 'DESC')->first();
      return response()->json(['data'=>$eachnews]);
    }
    private $status_code = 200;
    public function uploadfile(Request $request) {
      $file = $request->file('file');
      $user_id = $request->userid;
      $category_id = $request->categoryid;
      $title = $request->title;
      $content = $request->content;

      // make the random file name
      $file_name = $_FILES["file"]["name"];
      $sps = explode(".", $file_name);    // file name
      $image_type = $sps[count($sps) - 1];    // jpg/png/mp4...
      $random_name = md5(uniqid(rand(), true)); // random name create
      $created_name = 'assets/imgs/news/'.$sps[0].$random_name.'.'.$sps[1];  //name combine

      // file move to folder
      $file->move('assets/imgs/news/', $created_name);

      $res = NewsList::create([
          'title' => $title,
          'img' => $created_name,
          'content' => $content,
          'user_id' => $user_id,
          'category_list_id' => $category_id,
          'status' => '0'
      ]);
      
      if($res != "") {
        return response()->json(["status" => $this->status_code, "success" => true, "message" => "Publish completed successfully"]);
      }
    }

}
