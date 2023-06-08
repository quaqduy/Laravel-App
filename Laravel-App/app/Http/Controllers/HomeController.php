<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = [
            ['name'=> "Iphone 11",'price' => "10tr"],
            ['name'=> "Iphone 12",'price' => "15tr"],
            ['name'=> "Iphone 13",'price' => "20tr"],
            ['name'=> "Iphone 14",'price' => "25tr"],
            ['name'=> "Iphone 15",'price' => "30tr"]
        ];
        return view('home',['data'=>$data]);
    }
}
