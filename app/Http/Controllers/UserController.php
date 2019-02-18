<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\User_lecturer;
use App\User;
use App\Subject;
use App\User_admin;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

use Response;

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
    }else if(Auth::attempt(['username'=>$request->username,
        'password'=> $request->password, 'role'=>2])) {
        return redirect('user/students/dashboard');

    }else if(Auth::attempt(['username'=>$request->username,
        'password'=> $request->password, 'role'=>1])) {

        return redirect('user/lecturers/dashboard');

    }else 
    return redirect ('login')->with('thongbao','Đăng nhập không thành công');

}

public function getlogout() {
    Auth::logout();
    return redirect ('login');
}

public function admin_list() {
    $user_admin= DB::table('users')
    ->join('user_admin','users.username','=','user_admin.user_id')
    ->get();

    return view('admin.admin_list')->with('user_admin', $user_admin);
}
public function admin_post_add (Request $request) {


    $user = new User;
    $user->username = $request->txtUser;
    $user->password = bcrypt($request->txtPass);
    $user->role = 0;
    $user->img = 'img/user2.png';
    $user->save();

    $user_admin = new User_admin;
    $user_admin->name = $request->txtName;
    $user_admin->email = $request->txtEmail;
    $user_admin->user_id = $request->txtUser;
    $user_admin->img = 'img/user2.png';
    $user_admin->save();

    $admin = DB::table('users')
    ->join('user_admin','users.username','=','user_admin.user_id')->get();
    return redirect('admin/admin_list');
    
}

public function show() {
    $name = Auth::user()->username;
        // echo $name;
    $infor = DB::table('user_admin')->where('user_id', $name)->get();
    return view('admin.infor')->with('infor', $infor);
}
public function update(Request $res) {
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
        DB::table('user_admin')->where('user_id', $user_id)->update(['name' => $name, 'email' => $email, 'img' => $direct, 'phone' => $phone, 'address' => $address]);
        DB::table('users')->where('username', $user_id)->update(['img' => $direct]);
    }
    else
        DB::table('user_admin')->where('user_id', $user_id)->update(['name' => $name, 'email' => $email, 'phone' => $phone, 'address' => $address]);

    return redirect('admin/infor');
}

} 
