<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends controller{
    public function index(){
        $data = [
            ['name'=>'みほう', 'mail'=>'m@one'],
            ['name'=>'しゅか', 'mail'=>'m@two'],
            ['name'=>'ふりゃ', 'mail'=>'m@san']
        ];
        return view('hello.index',['data'=>$data]);
    }
}
