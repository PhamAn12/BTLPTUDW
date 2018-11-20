<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\User_lecturer;
use App\User_student;   
use App\User;  
class ControllerUserLecturer extends Controller
{
    public function user_list() {
        $user = User_lecturer::all();
    	return view('admin.user.user_list')->with('user', $user);
    }
    public function user_get_edit() {
        return view('admin.user.user_edit');
    }
    public function user_post_edit() {
        return view('admin.user.user_add');
    }
    public function user_get_add() {
        return view('admin.user.user_add');
    }
    public function user_post_add(Request $request) {
      
        
        $user_student = new User_lecturer;
        $user_student->user = $request->txtUser;
        $user_student->email = $request->txtEmail;
        $user_student->password = $request->txtPass;
        $user_student->rePassword = $request->txtRePass;
        
        $user_student->create_at = Carbon::now();
        $user_student->save();
        $user = new User;
        
        $user->username = $request->txtUser;
        $user->password = bcrypt($request->txtPass);
        $user->role = 2;
        $user->created_at = Carbon::now();
        $user->updated_at = Carbon::now();        
        $user->save();
        return redirect('admin/user/user_list');
    }
    
}
