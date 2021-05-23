<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Http\Model\NewsList;
use\App\Http\Model\UserRegister;
use\App\Http\Model\CategoryList;

class ThirdCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
      $hua_data = NewsList::where('category_list_id', 3)->where('status', 1)->orderBy('id', 'DESC')->get();
      $rio_recent = NewsList::where('category_list_id', 4)->where('status', 1)->orderBy('id', 'DESC')->get();

      if(isset($hua_data) && isset($rio_recent)) {
        return view('blank_page');
      }
   
      return view('huasteca')->with([
        'hua_data'=>$hua_data,
        'rio_recent'=>$rio_recent
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $detail_data = NewsList::where('id', $id)->first();
      $user_data = UserRegister::where('id', $detail_data->user_id)->first();
      $other_data = NewsList::where('category_list_id', 4)->latest()->first();
      
      return view('news_detail')->with([
        'each_data' => $detail_data,
        'user_data' =>$user_data,
        'other_data' =>$other_data
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
