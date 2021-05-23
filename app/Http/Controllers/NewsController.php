<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {
      return view('news_detail');
    }
    public function CIUDAD_VALLES() {
      return view('ciudad-valles');
    }
    public function SLP() {
      return view('slp');
    }
    public function HUASTECA() {
      return view('huasteca');
    }
    public function RIO_VERDE() {
      return view('rio-verde');
    }
    public function TAMAZUNCHALE() {
      return view('tamazunchale');
    }
    public function POLICIA() {
      return view('policia');
    }
    public function DE_TODO() {
      return view('de-todo');
    }
}
