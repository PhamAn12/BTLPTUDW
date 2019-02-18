<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User_student;
use App\User;
use DB;
use Excel;
use File;
use Session;
class ControllerUserStudent extends Controller
{

	public function student_delete($username){
		$user= User::find($username);
		$user->delete();
		return redirect('admin/student/student_list')->with('success','Bạn đã xóa thành công');
	}

	public function student_get_edit($id) {
		$user_students=User_student::find($id);
		return view('admin.students.student_edit')->with('user_students',$user_students);
	}
	public function student_post_edit(Request $request,$id) {
		$this->validate($request,[
			'txtName'=>'required',
			'txtEmail'=>'required',
			'txtCourse'=>'required'
		],[
			'txtName.required'=>'Bạn chưa nhập tên người dùng',
			'txtEmail.required'=>'Bạn chưa nhập email',
			'txtCourse.required'=>'Bạn chưa nhập course'
		]);

		$user_students=User_student::find($id);
		$user_students->name = $request->txtName;
		$user_students->email = $request->txtEmail;
		$user_students->course = $request->txtCourse;
		$user_students->modified_at = Carbon::now();
		$user_students->save();
		Session::flash('success', 'Bạn đã sửa thành công !');
		return back();
		//return redirect ('admin/student/student_edit/'.$id)->with('thongbao',
		//	'Bạn đã sửa thành công');
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
	public function student_post_addone(Request $request) {
		$user = new User;
		$user->username = $request->txtUser;
		$user->password = bcrypt($request->txtPass);
		$user->role = 2;
		$user->img = 'img/user2.png';
		$user->save();

		$user_students = new User_student;
		$user_students->name = $request->txtName;
		$user_students->email = $request->txtEmail;
		$user_students->course = $request->txtCourse;
		$user_students->user_id = $request->txtUser;
		$user_students->img = 'img/user2.png';
		$user_students->save();
		return redirect('admin/student/student_list');
	}
	public function student_post_add(Request $request) {
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
						$insert[] = ['username' => $value->username, 'password' => bcrypt($value->password),'role'=>2,'img'=>'img/user2.png',
						'created_at'=>Carbon::now()];
						$insert_student[] = ['name'=>$value->name,'email'=>$value->email,'course'=>$value->course,'img'=>'img/user2.png',
						'user_id'=>$value->username];

					}
					if(!empty($insert)&& !empty($insert_student)){

						DB::table('users')->insert($insert);                     
						DB::table('user_student')->insert($insert_student);   

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
