<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //for homepage
    function index(){
        return view('home');
    }
    function test(){
        return view('testt');
    }
};
