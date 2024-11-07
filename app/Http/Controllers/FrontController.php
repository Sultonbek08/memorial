<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        
        return view('index');
    }
    public function about(){
        
        return view('about');
    }
    public function ourbooks(){
        
        return view('ourbooks');
    }
    public function library(){
        
        return view('library');
    }
    public function contactus(){
        
        return view('contactus');
    }
}
