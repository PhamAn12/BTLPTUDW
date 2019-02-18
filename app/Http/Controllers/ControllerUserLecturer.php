<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\User_lecturer;
use App\User_student;   
use App\User;  
use DB;
use Excel;
use File;
use Session;
use Illuminate\Support\Facades\Input;
class ControllerUserLecturer extends Controller
{
    public function user_delete($username){
        $user= User::find($username);
        $user->delete();
        return redirect('admin/user/user_list')->with('success','Bạn đã xóa thành công');
    }
    public function user_list() {

        $user_lecturer= DB::table('users')
        ->join('user_lecturer','users.username','=','user_lecturer.user_id')
        ->get();

        return view('admin.user.user_list')->with('user_lecturer', $user_lecturer);
     //    $user = User_lecturer::all();
    	// return view('admin.user.user_list')->with('user', $user);
    }
    public function user_get_edit($id) {
        $user_lecturer=User_lecturer::find($id);
        return view('admin.user.user_edit')->with('user_lecturer',$user_lecturer);
    }
    public function user_post_edit(Request $request,$id) {
        $this->validate($request,[
            'txtName'=>'required',
            'txtEmail'=>'required',
            'txtMagv'=>'required'
        ],[
            'txtName.required'=>'Bạn chưa nhập tên người dùng',
            'txtEmail.required'=>'Bạn chưa nhập email',
            'txtMagv.required'=>'Bạn chưa nhập mã giảng viên'
        ]);

        $user_lecturer=User_lecturer::find($id);
        $user_lecturer->name = $request->txtName;
        $user_lecturer->email = $request->txtEmail;
        $user_lecturer->magv = $request->txtMagv;
        $user_lecturer->modified_at = Carbon::now();
        $user_lecturer->save();
        Session::flash('success', 'Bạn đã sửa thành công !');
        return back();
    }
    public function user_get_add() {
        return view('admin.user.user_add');
    }
    public function user_post_addone(Request $request) {
        $user = new User;
        $user->username = $request->txtUser;
        $user->password = $request->txtPass;
        $user->role = 1;
        $user->img = 'img/user2.png';
        $user->save();
        
        $user_lecturer = new User_lecturer;
        $user_lecturer->name = $request->txtName;
        $user_lecturer->email = $request->txtEmail;
        $user_lecturer->user_id = $request->txtUser;
        $user_lecturer->magv = $request->txtMagv;
        $user_lecturer->img = 'img/user2.png';
        $user_lecturer->save();

        
        
        return redirect('admin/user/user_list');
    }   
    public function user_post_add(Request $request) {
        $this->validate($request, array(
            'import_file'     => 'required'
        ));
        if(Input::hasFile('import_file')){
            $extension = File::extension($request->import_file->getClientOriginalName());
            if ($extension == "xlsx" || $extension == "xls" || $extension == "csv") {
                $path = Input::file('import_file')->getRealPath();
                $data = Excel::load($path, function($reader) {
                })->get();
                if(!empty($data) && $data->count()){

                    foreach ($data as $key => $value) {
                        $insert[] = ['username' => $value->username, 'password' => bcrypt($value->password),'role'=>1,'img'=>'img/user2.png',
                        'created_at'=>Carbon::now()];
                        $insert_lecturer[] = ['name'=>$value->name,'email'=>$value->email,'magv' => $value->mgv, 'img'=>'img/user2.png',
                        'user_id'=>$value->username];

                    }
                    if(!empty($insert)&& !empty($insert_lecturer)){

                        DB::table('users')->insert($insert);                     
                        DB::table('user_lecturer')->insert($insert_lecturer);                   
                        if ($insert) {
                            Session::flash('success', 'Bạn đã thêm thành công !');
                        }else {                        
                            Session::flash('error', 'Có lỗi xảy ra mời bạn kiểm tra lại');
                            return back();
                        }
                    }

                }
                return back();
            }else {
                Session::flash('error', 'File là '.$extension.' file.!! chỉ được upload xls/csv file..!!');
                return back();
            }

            
        }
        
        
    }
    
}
