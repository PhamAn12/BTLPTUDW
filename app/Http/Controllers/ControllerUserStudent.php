<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User_student;
use App\User;
use DB;
use Excel;
class ControllerUserStudent extends Controller
{
	public function student_delete($username){
		$user= User::find($username);
		$user->delete();
		return redirect('admin/student/student_list')->with('thongbao','Xóa thành công');
	}

	public function student_get_edit($id) {
		$user_students=User_student::find($id);
		return view('admin.students.student_edit')->with('user_students',$user_students);
	}
	public function student_post_edit(Request $request,$id) {
		$this->validate($request,[
			'name'=>'required',
			'email'=>'required',
			'course'=>'required'
		],[
			'name.required'=>'Bạn chưa nhập tên người dùng',
			'email.required'=>'Bạn chưa nhập email',
			'course.required'=>'Bạn chưa nhập course'
		]);

		$user_students=User_student::find($id);
		$user_students->name = $request->txtName;
		$user_students->email = $request->txtEmail;
		$user_students->course = $request->txtCourse;
		
		$user_students->save();
		return redirect ('admin/student/student_edit/'.$id)->with('thongbao',
		'Bạn đã sửa thành công');
	}
	public function user_list() {
		$user_student= DB::table('users')
							->join('user_student','users.username','=','user_student.user_id')
							->get();
			
		return view('admin.students.student_list')->with('user_student', $user_student);			
	}
    public function student_get_add() {
        return view('admin.students.student_add');
    }
	
    public function student_post_add() {
		
        if(Input::hasFile('import_file')){
			
			$path = Input::file('import_file')->getRealPath();
			$data = Excel::load($path, function($reader) {
			})->get();
			if(!empty($data) && $data->count()){
	
				foreach ($data as $key => $value) {
					$insert[] = ['username' => $value->username, 'password' => bcrypt($value->password),'role'=>2,
					'created_at'=>Carbon::now()];
					$insert_student[] = ['name'=>$value->name,'email'=>$value->email,'course'=>$value->course,
				 						 'user_id'=>$value->username];
                    
				}
				if(!empty($insert)&& !empty($insert_student)){
					
                    DB::table('users')->insert($insert);                     
                    DB::table('user_student')->insert($insert_student);                   
					dd('bạn đã thêm thành công');
				}
				
			}
			
		}
		
    }
}
