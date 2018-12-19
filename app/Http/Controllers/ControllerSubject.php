<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use App\Subject;
use App\User_lecturer;
use App\Respond;
use App\Answer;
use Illuminate\Support\Facades\Input;
class ControllerSubject extends Controller
{
	public function getlist() {
		return view('user.layout.master');
	}
	public function getResult($id) {
		$subject = DB::table('subject')
		->where('subject.id','=',$id)->get();
		return view('user.lecturers.result')->with('subject',$subject);
	}

	public function getFeedback($id,$idstudent) {
		$feedback = DB::table('question')
		->join('form','question.id','=','form.idquestion')
		->join('survey','survey.id','=','form.idsurvey')
		->join('subject','subject.idsurvey','=','survey.id')
		->where('survey.id','=',$id)
		->get();
		// $idstudent = DB::table('subject')
		// ->join('student-subject','subject.id','=','student-subject.idsubject')
		// ->where('subject.idsurvey','=',$id)
		// ->where('student-subject.idstudent','=',$idstudent)
		// ->get();		
		return view('user.students.feedback',[
			'feedback'=>$feedback,
			//'idstudent'=>$idstudent
		]);	
	}
	public function postFeedback($id,$idstudent,Request $request) {
		$response = DB::table('subject')
		->join('student-subject','subject.id','=','student-subject.idsubject')
		->where('subject.idsurvey','=',$id)
		->where('student-subject.idstudent','=',$idstudent)
		->get();
		DB::table('respond')->insert([
			'idsurvey'=>$response[0]->idsurvey,
			'idstudent-subject'=>$response[0]->id
		]);

		
		$answer = DB::table('form')
		->join('survey','form.idsurvey','=','survey.id')
		->join('respond','respond.idsurvey','=','survey.id')
		->join('student-subject','respond.idstudent-subject','=','student-subject.id')
		->where('respond.idsurvey','=',$id)
		->where('student-subject.idstudent','=',$idstudent)
		->get();
		
		foreach($answer as $a) {
			$b = "radio".$a->idform;
			$insertAnswer[] = ['idrespond'=>$a->idrespond,'idform'=>$a->idform,
			'point'=>$request->$b];
		}
		if(!empty($insertAnswer)) {
			DB::table('answer')->insert($insertAnswer);
		}

		$numresponse = DB::table('respond')
		->where('respond.idsurvey','=',$id)
		->count();
		
		DB::table('form')
            ->where('idsurvey', $id)
            ->update(['M' => 1]);
		return ('Thank you for your confirm');
	}
}
