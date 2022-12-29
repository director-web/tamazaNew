<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function catalog(){
        return view('catalog');
    }

    public function contacts(){
        return view('contacts');
    }
}
