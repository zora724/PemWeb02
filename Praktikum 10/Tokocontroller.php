<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tokocontroller extends Controller
{
    public function index()
    {
        return view('toko/index');
    }

    public function detail()
    {
        return view('toko/detail');
    }

    public function about()
    {
        return view('toko/about');
    }



}
