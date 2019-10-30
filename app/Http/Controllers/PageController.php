<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
      return view('pages.index');
    }

    public function neils(){
      return view('pages.neils');
    }

    public function paper(){
      return view('pages.paper');
    }

    public function about(){
      return view('pages.about');
    }

    public function contact(){
      return view('pages.contact');
    }
}
