<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index () {
        return view('index');
    }
    public function new () {
        return view('new');
    }
    public function index1(){
        return view('index1');
    }
    public function contact(){
        return view('contact');
    }
    public function about(){
        return view('about');
    }
    public function terms(){
        return view('terms');
    }
      public function faqs(){
        return view('faqs');
    }
    public function services(){
        return view('services');
    }
    public function homepage(){
        return view('homepage');
    }
    public function register(){
        return view('register');
    }
}
