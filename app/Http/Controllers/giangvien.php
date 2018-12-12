<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class giangvien extends Controller
{
    public function show(){
    	$monday = DB::table('monhoc')->get();
    	return view('user.lecturers.index')->with('monday', $monday);
    }

    public function ketqua(){
    	$monday = DB::table('monhoc')->get();
    	return view('user.lecturers.ketqua')->with('monday', $monday);
    }
}
