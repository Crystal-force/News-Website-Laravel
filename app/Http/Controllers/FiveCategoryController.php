<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Http\Model\NewsList;
use\App\Http\Model\UserRegister;
use\App\Http\Model\CategoryList;

class FiveCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $latest_data = NewsList::where('category_list_id', 5)->where('status', 1)->orderBy('id', 'DESC')->first();
        $all_data = NewsList::where('category_list_id', 5)->where('status', 1)->orderBy('id', 'DESC')->get();
        $other_data = NewsList::where('category_list_id', 4)->where('status', 1)->orderBy('id', 'DESC')->get();
        
        if(is_null($latest_data) && isset($all_data) && isset($other_data)) {
          return view('blank_page');
        }

        return view('tamazunchale')->with([
          'each_data' => $latest_data,
          'all_data' => $all_data,
          'other_data' =>$other_data
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
      $other_data = NewsList::where('category_list_id', 6)->latest()->first();
      
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
