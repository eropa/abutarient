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

    /**
     *
     * @param $id
     * @return array|string
     * @throws \Throwable
     */
    public function sectID($id){
        return view('front.section'.$id)->render();
    }
}
