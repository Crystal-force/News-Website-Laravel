<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Http\Model\NewsList;
use\App\Http\Model\UserRegister;
use\App\Http\Model\CategoryList;

class BasicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $res_data = NewsList::where('category_list_id', 1)->where('status', 1)->orderBy('id', 'DESC')->first();
        if($res_data == null) {
          return view('blank_page');
        };
        $user_data = UserRegister::where('id', $res_data->user_id)->first();
        $all_data = NewsList::where('category_list_id', 1)->where('status', 1)->orderBy('id', 'DESC')->get();
        $category_data = CategoryList::all();
        $other_data = NewsList::where('category_list_id', 2)->where('status', 1)->orderBy('id', 'DESC')->get();

        


        return view('ciudad-valles')->with([
          'last_data' => $res_data,
          'user_data' => $user_data,
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
        $other_data = NewsList::where('category_list_id', 2)->latest()->first();
        $latest_data = NewsList::orderBy('id', 'DESC')->first();
       
        return view('news_detail')->with([
          'each_data' => $detail_data,
          'user_data' =>$user_data,
          'other_data' =>$other_data,
          'latest_data' => $latest_data
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
