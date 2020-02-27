<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Главная страница
     */
    public function index(){
        return view('front.index');
    }
}
