<?php

namespace W3spiders\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{


    public function index(){

        return view('home');
    }

    public function About(){

        return view('about');
    }


}
