<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        //restituire la view 'home'
        return view('home');
    }
}
