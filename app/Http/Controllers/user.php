<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller
{
    public function user_list() {
        return view('admin.user.user_list');
    }
}
