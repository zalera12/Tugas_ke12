<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signup(){
        return view('signup');
    }

    public function welcome(Request $request){
        return view('welcome',[
            'first' => $request->input('first_name'),
            'last' => $request->input('last_name'),
            'gender' => $request->input('gender'), 
        ]);
    }
}
