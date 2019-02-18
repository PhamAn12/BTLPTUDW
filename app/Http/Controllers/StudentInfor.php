<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class StudentInfor extends Controller
{
    //
    public function show(){
    	$name = Auth::user()->username;
    	$infor = DB::table('user_student')->where('user_id', $name)->get();
    	// print_r($infor);
    	return view('user.students.infor')->with('infor', $infor);
    }

    public function update(Request $res){
        $user_id = Auth::user()->username;
    	$name = $res->name;
        $email = $res->email;
        $file = $res->file_img;
        $phone = $res->phone;
        $address = $res->address;
        // echo $phone;
        if($file != ""){
            
            if($res->hasFile('file_img')){
                $file->move('img',$file->getClientOriginalName());
            }
            $direct = "img/" .$file->getClientOriginalName();
            DB::table('user_student')->where('user_id', $user_id)->update(['name' => $name, 'email' => $email, 'img' => $direct, 'address' => $address, 'phone' => $phone]);
            DB::table('users')->where('username', $user_id)->update(['img' => $direct]);
        }
        else
            DB::table('user_student')->where('user_id', $user_id)->update(['name' => $name, 'email' => $email, 'address' => $address, 'phone' => $phone]);
        return redirect('user/students/infor');
    }
}