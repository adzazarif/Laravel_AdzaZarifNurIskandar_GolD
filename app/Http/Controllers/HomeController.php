<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("index",[
            "nama"=> "Adza Zarif Nur Iskandar"
        ]);
    }
}
