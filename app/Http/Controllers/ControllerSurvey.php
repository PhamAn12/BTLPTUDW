<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Survey;
use App\Subject;
use App\User_lecturer;
use App\User;
use App\user_student;
use DB;
use Excel;
use Illuminate\Support\Facades\Input;
class ControllerSurvey extends Controller
{
    public function survey_list() {
    	$survey_list = Survey::all();
    	return view('admin.survey.survey_list')->with('survey_list',$survey_list);
    }

    public function survey_post_add(Request $request) {
    	$survey = new Survey;
    	$survey->name = $request->txtSubject;
    	$survey->active = 1;
    	$survey->created_at = Carbon::now();
    	$survey->save();
    	// gán id của gv vào bảng survey với magv tương ứng
    	$lecture = DB::table('user_lecturer')
    	->where('magv','=',$request->txtmgv)->get();

    	//dump($lecture[0]->id);
    	
    	$subject = new Subject;
    	$subject->subject_name = $request->txtSubject;
    	$subject->code_subject = 'INT320';
    	$subject->idlecturer =$lecture[0]->id;
    	$subject->idsurvey = $survey->id;
    	$subject->save();
    //	return redirect('admin/survey/survey_list');

        $question = DB::table('question')->select('id')->get();
        foreach($question as $q){
            $insert_question[]= ['idquestion'=>$q->id,'idsurvey'=>$survey->id];
        }
        if(!empty($insert_question)){

            DB::table('form')->insert($insert_question);                     

            
        }
        if(Input::hasFile('import_file')){

            $path = Input::file('import_file')->getRealPath();
            $data = Excel::load($path, function($reader) {
            })->get();
            if(!empty($data) && $data->count()){

                foreach ($data as $key => $value) {
                    $student = DB::table('user_student')
                    ->where('user_id','=',$value->username)->get();
                    
                    $insert[] = ['idstudent' => $student[0]->id,'idsubject'=>$subject->id];
                    //$student = $value->username;
                    //dump($student[0]->id);

                }

                if(!empty($insert)){

                    DB::table('student-subject')->insert($insert);                     

                    dd('bạn đã thêm thành công');
                    
                }
                
            }
            
        }

    }
}
