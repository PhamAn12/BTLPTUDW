<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
class LecturerInfor extends Controller
{
    //
    public function show(){
    	$name = Auth::user()->username;
    	// echo $name;
    	$infor = DB::table('user_lecturer')->where('user_id', $name)->get();
    	return view('user.lecturers.infor')->with('infor', $infor);
    }

    public function update(Request $res){
    	$user_id = Auth::user()->username;
    	$name = $res->name;
        $email = $res->email;
        $file = $res->file_img;
        $address = $res->address;
        $phone = $res->phone;
        if($file != ""){
            if($res->hasFile('file_img')){
                $file->move('img',$file->getClientOriginalName());
            }
            $direct = "img/" .$file->getClientOriginalName();
            DB::table('user_lecturer')->where('user_id', $user_id)->update(['name' => $name, 'email' => $email, 'img' => $direct, 'sdt' => $phone, 'diachi' => $address]);
            DB::table('users')->where('username', $user_id)->update(['img' => $direct]);
        }
        else
            DB::table('user_lecturer')->where('user_id', $user_id)->update(['name' => $name, 'email' => $email, 'sdt' => $phone, 'diachi' => $address]);
        
        return redirect('user/lecturers/infor');
    }
}