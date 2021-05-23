<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Http\Model\NewsList;
use\App\Http\Model\UserRegister;
use\App\Http\Model\CategoryList;
use App\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index() {
      $ciudad_data_1 = NewsList::where('category_list_id', 1)->where('status', 1)->orderBy('id', 'DESC')->get();
      $background_1 = NewsList::where('category_list_id', 1)->where('status', 1)->orderBy('id', 'DESC')->first();
      $background_2 = NewsList::where('category_list_id', 2)->where('status', 1)->orderBy('id', 'DESC')->first();
      $background_3 = NewsList::where('category_list_id', 3)->where('status', 1)->orderBy('id', 'DESC')->first();
      $background_4 = NewsList::where('category_list_id', 4)->where('status', 1)->orderBy('id', 'DESC')->first();
      $background_5 = NewsList::where('category_list_id', 5)->where('status', 1)->orderBy('id', 'DESC')->first();
      $background_6 = NewsList::where('category_list_id', 6)->where('status', 1)->orderBy('id', 'DESC')->first();
      

      $ciudad_data_2 = NewsList::where('category_list_id', 1)->where('status', 1)->get();
      $slp_last_data = NewsList::where('category_list_id', 2)->where('status', 1)->orderBy('id', 'DESC')->first();
      $slp_all_data = NewsList::where('category_list_id', 2)->where('status', 1)->orderBy('id', 'DESC')->get();
      $hua_data = NewsList::where('category_list_id', 3)->where('status', 1)->orderBy('id', 'DESC')->get();
      $rio_data = NewsList::where('category_list_id', 4)->where('status', 1)->orderBy('id', 'DESC')->get();
      $rio_data_2 = NewsList::where('category_list_id', 4)->where('status', 1)->get();
      $tam_data = NewsList::where('category_list_id', 5)->where('status', 1)->orderBy('id', 'DESC')->first();
      $pol_data = NewsList::where('category_list_id', 6)->where('status', 1)->orderBy('id', 'DESC')->first();
      $de_data = NewsList::where('category_list_id', 7)->where('status', 1)->orderBy('id', 'DESC')->first();
      $latest_news = NewsList::orderBy('id','DESC')->where('status', 1)->first();
      $latest_allnews = NewsList::orderBy('id','DESC')->where('status', 1)->get();
      $user_data = UserRegister::orderBy('id', 'DESC')->first();
      
      // dd($ciudad_data_1, $background_1, $background_2 , $background_3 , $background_4 , $background_5 , $background_6 , $ciudad_data_2 , $slp_last_data , $slp_all_data , $hua_data , $rio_data , $rio_data_2 , $tam_data , $pol_data , $de_data , $latest_news , $latest_allnews ,  $user_data  ); 
      // dd($ciudad_data_1 == "" && $background_1 == "" && $background_2 == "" && $background_3 == "" && $background_4 == "" && $background_5 == "" && $background_6 == "" && $ciudad_data_2 == "" && $slp_last_data == "" && $slp_all_data == "" && $hua_data == "" && $rio_data == "" && $rio_data_2 == "" && $tam_data == "" && $pol_data == "" && $de_data == "" && $latest_news = "" && $latest_allnews == "" &&  $user_data == "" ); 
      // {
      //   dd('null');
      // }

      if( is_null($slp_last_data) && is_null($tam_data) && is_null($pol_data) && is_null($de_data) && isset($ciudad_data_1) && isset($ciudad_data_2) && isset($slp_all_data) && isset($hua_data) && isset($rio_data) && isset($rio_data_2) && is_null($tam_data) && isset($latest_allnews)){
        return view('blank_page');
      }
      else{
          return view('landing')->with([ 
            'background_1'=> $background_1,
            'background_2'=> $background_2,
            'background_3'=> $background_3,
            'background_4'=> $background_4,
            'background_5'=> $background_5,
            'background_6'=> $background_6,
            
            'ciudad_last' => $ciudad_data_1,
            'ciudad_first' => $ciudad_data_2,
            'slp_last_data' => $slp_last_data,
            'slp_all_data' => $slp_all_data,
            'hua_data' => $hua_data,
            'rio_data' => $rio_data,
            'rio_data_2' => $rio_data_2,
            'tam_data' => $tam_data,
            'pol_data' => $pol_data,
            'de_data' => $de_data,
            'latest_news' => $latest_news,
            'latest_allnews' => $latest_allnews,
            'user_data' => $user_data
          ]);
      }
    }



    private $status_code = 200;

    public function userSignUp(Request $request) {
      $validator = Validator::make($request->all(), [
          "name"  => "required",
          "email"  =>  "required|email",
          "password" => "required",
          "phone"  => "required"
      ]);

      if($validator->fails()) {
          return response()->json(["status" => "failed", "message" => "validation_error", "errors" => $validator->errors()]);
      }

    
      $userDataArray = array(
        "name"=> $request->name,
        "email"=>$request->email,
        "password"=>md5($request->password),
        "phone"=>$request->phone,
        'avarter'=>'assets/imgs/avater/Velazquez.jpg',
        'accept'=>'0'
    );
      $user_status=UserRegister::where("email", $request->email)->first();

      if(!is_null($user_status)) {
         return response()->json(["status" => "failed", "success" => false, "message" => "Whoops! email already registered"]);
      }
      $user = UserRegister::create($userDataArray);
      if(!is_null($user)) {
          return response()->json(["status" => $this->status_code, "success" => true, "message" => "Registration completed successfully", "data" => $user]);
      }
      else {
        return response()->json(["status" => "failed", "success" => false, "message" => "failed to register"]);
      }
  }

  public function userLogin(Request $request) {
    $validator = Validator::make($request->all(),
      [
        'email' => 'required|email',
        'password' => 'required'
      ]
    );
    if($validator->fails()) {
        return response()->json(["status" => "failed", "validation_error" => $validator->errors()]);
    }
    $email = $request->email;
    $password =md5($request->password);

    $status = UserRegister::where('email', $email)->where('password', $password)->first();
 
    if(!is_null($status)) {
      return response()->json(["status" => $this->status_code, "success" => true, "message" => "You have logged in successfully"]);
    }
    else {
       return response()->json(["status" => "failed", "success" => false, "message" => "Unable to login. Email or Password doesn't exist."]);
    }
  }

  public function userForgot(Request $request) {
    $validator = Validator::make($request->all(),
      [
        'email' => 'required|email',
        'password' => 'required'
      ]
    );
    if($validator->fails()) {
        return response()->json(["status" => "failed", "validation_error" => $validator->errors()]);
    }

    $email = $request->email;
    $password = md5($request->password);

    $status = UserRegister::where('email', $email)->update(array('password'=>$password));

    if($status == true) {
      return response()->json(["status" => $this->status_code, "success" => true, "message" => "Resetting completed successfully"]);
    }
    else if($status == false) {
      return response()->json(["status" => "failed", "success" => false, "message" => "Unable to resetting. Email doesn't exist."]);
    }

  }

}
