<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function getlogin() {
        return view ('admin.login');
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
            'password'=> $request->password])) {
                return redirect('admin/user/user_add');
        }
        else 
            return redirect ('admin/login')->with('thongbao','Đăng nhập không thành công');

    }
}
