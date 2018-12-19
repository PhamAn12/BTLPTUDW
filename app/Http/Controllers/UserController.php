<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\User_lecturer;
use App\User;
use App\Subject;
class UserController extends Controller
{
    public function getlogin() {
        return view ('admin.login');
    }
    public function getdashboard() {
        return view ('admin.dashboard');
    }

    public function getDashboardStudent() {
        return view('user.students.dashboardStudent');
    }

    public function getDashboardLecturer() {

        $lecturer = DB::table('user_lecturer')
        ->join('subject','user_lecturer.id','=','subject.idlecturer')
        ->where('user_id','=',Auth::user()->username)->get();

        return view ('user.lecturers.dashboardLecturer')->with('lecturer',$lecturer);
    }
    public function postlogin(Request $request) {
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required|min:3|max:30'
        ],[
            'username.required'=>'Bạn chưa nhập username',
            'password.required'=>'Bạn chưa nhập password',
            'password.min'=>'password không được nhỏ hơn 3 kí tự',
            'password.max'=>'password không lớn hơn 30 kí tự'
        ]);

        if(Auth::attempt(['username'=>$request->username,
            'password'=> $request->password, 'role'=>0])) {
            return redirect('admin/dashboard');
    }
    else if(Auth::attempt(['username'=>$request->username,
        'password'=> $request->password, 'role'=>2])) {
        return redirect('user/students/dashboard');

}
else if(Auth::attempt(['username'=>$request->username,
    'password'=> $request->password, 'role'=>1])) {

    return redirect('user/lecturers/dashboard');

}  
else 
    return redirect ('login')->with('thongbao','Đăng nhập không thành công');

}

public function getlogout() {
    Auth::logout();
    return redirect ('login');
}

public function admin_list() {
    return view('admin.admin_list');
}
}
