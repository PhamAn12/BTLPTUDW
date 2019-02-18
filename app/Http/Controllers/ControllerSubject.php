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
		->join('user_lecturer','user_lecturer.id','=','subject.idlecturer')
		->where('subject.idsurvey','=',$id)->get();
		$result = DB::table('question')
		->join('form','question.id','=','form.idquestion')
		->join('survey','survey.id','=','form.idsurvey')
		->join('subject','subject.idsurvey','=','survey.id')
		->where('survey.id','=',$id)
		->get();
		return view('user.lecturers.result',[
			'subject'=>$subject,
			'result'=> $result
		]);
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
		$group = DB::table('question_group')
		->get();	
		return view('user.students.feedback',[
			'feedback'=>$feedback,
			'group'=>$group
			//'idstudent'=>$idstudent
		]);	
	}
	public function postFeedback($id,$idstudent,Request $request) {
		$check = DB::table('respond')
		->join('student-subject','respond.idstudent-subject','=','student-subject.id')
		->get();
		// foreach ($check as $c) {
		// 	if($c->idstudent == $idstudent && $c->idsurvey == $id) 
		// 		return 'Bạn đã trả lời phiếu này';
		// }
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
		
		foreach ($answer as $a) {
			$this->validate($request,
				[
					'radio'.$a->idform => 'required',
				],
				[
			 		'required' => ':attribute cần đánh giá tất cả',
			 	], 

			 	[
			 		'radio'.$a->idform => 'Bạn ',
			 	]
			);
		}
		foreach($answer as $a) {
			$b = "radio".$a->idform;
			$insertAnswer[] = ['idrespond'=>$a->idrespond,'idform'=>$a->idform,
			'point'=>$request->$b];	
			//$point[] = ['M'=>$request->$b];	

		}
		if(!empty($insertAnswer)) {
			DB::table('answer')->insert($insertAnswer);
			
		}
		//dump($point);
		// số sinh viên tham gia cuộc khảo sát 
		$numresponse = DB::table('respond')
		->where('respond.idsurvey','=',$id)
		->count();
		// tìm tên môn học có idsurvey = id
		$name_subject = DB::table('subject')
		->where('subject.idsurvey','=', $id)->get();
		//tên môn học
		//dump($name_subject[0] ->subject_name);
		// Số sinh viên trả lời phiếu của môn học giống nhau
		$numsubjectresponse = DB::table('respond')
		->join('student-subject','respond.idstudent-subject','=','student-subject.id')
		->join('subject','subject.id','=','student-subject.idsubject')
		->where('subject.subject_name','=',$name_subject[0] ->subject_name)
		->count();
		//dump($numsubjectresponse);
		// Số môn học có tên giống nhau
		$numsuject = DB::table('subject')
		->where('subject.subject_name','=',$name_subject[0] ->subject_name)
		->count();
		//dump($numsuject);
		// Số môn học có mã giảng viên giống nhau
		$mgvien = DB::table('user_lecturer')
		->join('subject','user_lecturer.id','subject.idlecturer')
		->where('subject.idsurvey',$id)->get();
		$nummgvien = DB::table('user_lecturer')
		->where('user_lecturer.magv', $mgvien[0]->magv)
		->count();

		foreach($answer as $a) {
			$b = "radio".$a->idform;
			
			$oldpoint = DB::table('form')			
			->where('idsurvey', $id)
			->where('idform',$a->idform)
			->get();
			
			// tính M
			$medium =  ($oldpoint[0]->M * ($numresponse-1) + ($request->$b))/$numresponse;
			// tính STD
			$phi = (((pow(($oldpoint[0]->STD),2) + pow(($oldpoint[0]->M),2)) * ($numresponse-1) 
				+ pow($request->$b,2))/ ($numresponse)) - pow($medium,2);
			
			$std = sqrt($phi);
			// Tính M2 STD2
			
			DB::table('form')
			->where('idsurvey', $id)
			->where('idform',$a->idform)
			->update([
				'M' => $medium,
				'STD'=>$std
			]);	
			
			for($i = 2; $i<= 7; $i++) {
				$sum = DB::table('form')
				->join('survey','form.idsurvey','=','survey.id')
				->join('subject','subject.idsurvey','=','survey.id')
				->where('subject.subject_name','=',$name_subject[0] ->subject_name)
				->where('form.idquestion',$i)
				->sum('M');

				$sumstd = DB::table('form')
				->join('survey','form.idsurvey','=','survey.id')
				->join('subject','subject.idsurvey','=','survey.id')
				->where('subject.subject_name','=',$name_subject[0] ->subject_name)
				->where('form.idquestion',$i)
				->sum('STD');

				DB::table('form')
				->join('survey','form.idsurvey','=','survey.id')
				->join('subject','subject.idsurvey','=','survey.id')
				->where('subject.subject_name','=',$name_subject[0] ->subject_name)
				->where('form.idquestion',$i)		
				->update([
					'M1' => $sum/$numsuject,
					'STD1' =>$sumstd/$numsuject
				]);


				$sumM2 = DB::table('form')
				->join('survey','form.idsurvey','=','survey.id')
				->join('subject','subject.idsurvey','=','survey.id')
				->join('user_lecturer','user_lecturer.id','=','subject.idlecturer')
				->where('user_lecturer.magv',$mgvien[0]->magv)
				->where('form.idquestion',$i)
				->sum('M');

				$sumstd2 = DB::table('form')
				->join('survey','form.idsurvey','=','survey.id')
				->join('subject','subject.idsurvey','=','survey.id')
				->join('user_lecturer','user_lecturer.id','=','subject.idlecturer')
				->where('user_lecturer.magv',$mgvien[0]->magv)
				->where('form.idquestion',$i)
				->sum('STD');

				DB::table('form')
				->join('survey','form.idsurvey','=','survey.id')
				->join('subject','subject.idsurvey','=','survey.id')
				->join('user_lecturer','user_lecturer.id','=','subject.idlecturer')
				->where('user_lecturer.magv',$mgvien[0]->magv)
				->where('form.idquestion',$i)	
				->update([
					'M2' => $sumM2/$nummgvien,
					'STD2' =>$sumstd2/$nummgvien
				]);
			}


		}
		
		
		dd('Thank you for your confirm');
	}
}
