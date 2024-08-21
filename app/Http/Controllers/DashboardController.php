<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function table(){
        return view('table',[
            'title' => 'table'
        ]);
    }

    public function tabledata(){
        return view('tabledata',[
            'title' => 'table data'
        ]);
    }

}
