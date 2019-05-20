<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends controller{
    public function index(){
        return view('hello.index',['message'=>'Hello!']);
    }
}
