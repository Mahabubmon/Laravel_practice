<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModalContoller extends Controller
{
    //
    public function index(){
        return view('modals.index');
    }
}
