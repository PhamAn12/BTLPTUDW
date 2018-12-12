<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class sinhvien extends Controller
{
    //
    public function show(){
    	$monhoc = DB::table('monhoc')->get();
    	return view('user.students.index')->with('monhoc', $monhoc);
    }

    public function danhgia($mamh){
    	$monhoc = DB::table('monhoc')->get();
    	$mh = DB::table('monhoc')->where('mamh', $mamh)->get();
    	return view('user.students.danhgia')->with(['mh' => $mh, 'monhoc' =>$monhoc]);
    }

    public function ketqua(Request $res){
    	echo "danh gia xong";
    }
}
