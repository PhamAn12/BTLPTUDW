<?php

use App\Http\Requests;


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function getURL (Request $request) {
        echo $request->path();
        echo $request->url();
    }
    
    public function postForm(Request $request) {
        echo "annn ".$request -> name;        
    }

}
