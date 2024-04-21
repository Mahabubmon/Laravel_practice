<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactContoller extends Controller
{
    //
    public function index(){
        return view("contact");
    }


    //store contact
    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'password' => 'required'
        ]);
     
    }
}
