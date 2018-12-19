<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\User_lecturer;
use App\User_student;   
use App\User;  
use DB;
use Excel;
use Illuminate\Support\Facades\Input;
class ControllerUserLecturer extends Controller
{
    public function user_list() {

        $user_lecturer= DB::table('users')
                            ->join('user_lecturer','users.username','=','user_lecturer.user_id')
                            ->get();
            
        return view('admin.user.user_list')->with('user_lecturer', $user_lecturer);
     //    $user = User_lecturer::all();
    	// return view('admin.user.user_list')->with('user', $user);
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
    public function user_post_addone(Request $request) {
        $user = new User;
        $user->username = $request->txtUser;
        $user->password = $request->txtPass;
        $user->role = 1;
        $user->save();
        
        $user_lecturer = new User_lecturer;
        $user_lecturer->name = $request->txtName;
        $user_lecturer->email = $request->txtEmail;
        $user_lecturer->user_id = $request->txtUser;
        $user_lecturer->magv = $request->txtMagv;
        $user_lecturer->save();

        
        return redirect('admin/user/user_list');
    }   
    public function user_post_add(Request $request) {
      
        if(Input::hasFile('import_file')){
            
            $path = Input::file('import_file')->getRealPath();
            $data = Excel::load($path, function($reader) {
            })->get();
            if(!empty($data) && $data->count()){
    
                foreach ($data as $key => $value) {
                    $insert[] = ['username' => $value->username, 'password' => bcrypt($value->password),'role'=>1,
                    'created_at'=>Carbon::now()];
                    $insert_lecturer[] = ['name'=>$value->name,'email'=>$value->email,'magv' => $value->mgv,
                                         'user_id'=>$value->username];
                    
                }
                if(!empty($insert)&& !empty($insert_lecturer)){
                    
                    DB::table('users')->insert($insert);                     
                    DB::table('user_lecturer')->insert($insert_lecturer);                   
                    return redirect('admin/user/user_list');
                }
                
            }
            
        }
        
        
    }
    
}
