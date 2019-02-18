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
use PHPExcel; 
use PHPExcel_Cell;
use PHPExcel_IOFactory;
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

    public function survey_get_addfile() {
        return view('admin.survey.survey_addfile');
    }
    public function survey_post_addfile(Request $request) {
        if(Input::hasFile('import_file')){

            $path = Input::file('import_file')->getRealPath();
            $objFile = PHPExcel_IOFactory::identify($path);
            $objData = PHPExcel_IOFactory::createReader($objFile);

            //Chỉ đọc dữ liệu
            $objData->setReadDataOnly(true);
            $objPHPExcel = $objData->load($path);

            $sheet_data = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
            //dump($sheet_data);
            $giang_vien = $objPHPExcel->getActiveSheet()->getCell('C7')->getValue();
            $magv = $objPHPExcel->getActiveSheet()->getCell('E7')->getValue();
            $mamh = $objPHPExcel->getActiveSheet()->getCell('C9')->getValue();
            $subject_name = $objPHPExcel->getActiveSheet()->getCell('C10')->getValue();
            $hocky = $objPHPExcel->getActiveSheet()->getCell('A5')->getValue();

            $survey = new Survey;
            $survey->name = $subject_name;
            $survey->active = 1;
            $survey->created_at = Carbon::now();
            $survey->save();
        // gán id của gv vào bảng survey với magv tương ứng
            $lecture = DB::table('user_lecturer')
            ->where('magv','=',$magv)->get();
            
            $subject = new Subject;
            $subject->subject_name = $subject_name;
            $subject->code_subject = $mamh;
            $subject->idlecturer =$lecture[0]->id;
            $subject->idsurvey = $survey->id;
            $subject->hocky = $hocky;
            $subject->save();
            //dump($sheet_data);
            //Lấy ra số dòng cuối cùng
            //$Totalrow = $objPHPExcel->getActiveSheet()->getHighestRow();
            //Lấy ra tên cột cuối cùng
            
            $question = DB::table('question')->select('id')->get();
            foreach($question as $q){
                $insert_question[]= ['idquestion'=>$q->id,'idsurvey'=>$survey->id];
            }
            if(!empty($insert_question)){

                DB::table('form')->insert($insert_question);                     


            }
            $LastColumn = $objPHPExcel->getActiveSheet()->getHighestColumn();
            $Totalrow = 15;
            while ($objPHPExcel->getActiveSheet()->getCellByColumnAndRow(1, $Totalrow)->getValue() != null) {
                $Totalrow++;
            }
            
            //Chuyển đổi tên cột đó về vị trí thứ, VD: C là 3,D là 4
            $TotalCol = PHPExcel_Cell::columnIndexFromString($LastColumn);

            //Tạo mảng chứa dữ liệu
            $data = [];

            //Tiến hành lặp qua từng ô dữ liệu
            //----Lặp dòng, Vì dòng đầu là tiêu đề cột nên chúng ta sẽ lặp giá trị từ dòng 2
            for ($i = 12; $i < $Totalrow; $i++) {
            //----Lặp cột
                for ($j = 0; $j < $TotalCol; $j++) {
                // Tiến hành lấy giá trị của từng ô đổ vào mảng

                    $data[$i - 12][$j] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($j, $i)
                    ->getValue();

                }
            }

            

            for($i = 12; $i <$Totalrow; $i++) {
                $student = DB::table('user_student')
                ->where('user_id','=',$data[$i-12][1])->get();

                $insert[] = ['idstudent' => $student[0]->id,'idsubject'=>$subject->id];
                
            }

            if(!empty($insert)){

                DB::table('student-subject')->insert($insert);                     

                dd('bạn đã thêm thành công');

            }
            
        }
    }
}
