<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Product extends Controller
{
    //
    public function index()
    {
        return view('backend.pages.product.add');
    }
    public function manage()
    {
        return view('backend.pages.product.manage');
    }

}
