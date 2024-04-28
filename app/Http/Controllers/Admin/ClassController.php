<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ClassController extends Controller
{
    //
    public function index(){

        $class=DB::table('classes')->get();
        return view('admin.classes',compact('class'));

    }
}
