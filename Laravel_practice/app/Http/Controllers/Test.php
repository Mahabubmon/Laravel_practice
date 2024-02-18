<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('welcome');
    }
    public function product()
    {
        return view('product');
    }
}
