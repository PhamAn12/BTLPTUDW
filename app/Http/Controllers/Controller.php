<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Support\Facades\Auth;
use App\User_lecturer;
use App\User;
use App\Subject;
use DB;
use View;
class Controller extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	public function __construct()
  {
    //its just a dummy data object.
    if(Auth::check()) {
    	$lecturer = DB::table('user_lecturer')
        ->join('subject','user_lecturer.id','=','subject.idlecturer')
        ->where('user_id','=',Auth::user()->username)->get();

        view()->share('lecturer',$lecturer);
    }
  }

}


