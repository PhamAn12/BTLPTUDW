<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Question;
use App\Question_sheet;
use App\User_lecturer;
use File;
use Session;
use Excel;
use Illuminate\Support\Facades\Input;
class ControllerServeySheet extends Controller
{
    public function servey_sheet_list() {
        $sheet = Question_sheet::all();
        return view('admin.servey.servey_sheet')->with('sheet', $sheet);
    }

    public function servey_sheet_get_add() {
        return view('admin.servey.sheet_add');
    }

    public function servey_sheet_post_add(Request $request) {

        $sheet = new Question_sheet();
        $sheet->question_text = $request->question; 

        if( $request->sel1 =='Cơ sở vật chất' )  
            $sheet->idgroupname = 1;
        else if ($request->sel1 =='Môn học')
            $sheet->idgroupname = 2;
        else if ($request->sel1 =='Hoạt động giảng dạy của giáo viên')
            $sheet->idgroupname = 3;
        else if ($request->sel1 =='Kết quả học tập')
            $sheet->idgroupname = 4;

        if( $request->ver1 =='1' )  
            $sheet->version = 1;
        else if ($request->ver1 =='2')
            $sheet->version = 2;
        else if ($request->ver1 =='3')
            $sheet->version = 3;
        else if ($request->ver1 =='4')
            $sheet->version = 4;
        
        
        $sheet->save();
        
        return redirect('admin/servey/servey_sheet_list');
    }

    public function servey_sheet_post_addfile(Request $request) {
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
                        $question = 'Câu hỏi';
                        $group = 'Nhóm';
                        $insert[] = ['question_text' => $value->cau_hoi, 'idgroupname' => $value->nhom, 'version' => $request->ver1
                    ];

                }
                if(!empty($insert)){
                    
                    DB::table('question_sheet')->insert($insert);                     
                    //dd('bạn đã thêm thành công');
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
public function servey_sheet_get_edit($id) {
    $sheet = Question_sheet::find($id);
    return view('admin.servey.sheet_edit')->with('sheet',$sheet);
}
public function servey_sheet_post_edit(Request $request, $id) {
    $sheet = Question_sheet::find($id);
    $sheet->question_text = $request->txtQuestion;
    $sheet->save();
    return redirect('admin/servey/servey_sheet_list');
}
public function servey_sheet_delete($id) {
    $sheet = Question_sheet::find($id);
    $sheet->delete();

    return redirect('admin/servey/servey_sheet_list');
}

public function servey_sheet_post_version(Request $request){
    $sheet=DB::table('question_sheet')
    ->where('version',$request->ver2)->get();
    $question = DB::table('question')->count();
    foreach ($sheet as $s) {
        $insert[] = ['question_text' => $s->question_text,'idgroupname' => $s->idgroupname,'version' => $s->version];
    }

    if($question != 0) {
        DB::table('question')
        ->delete();
        DB::table('question')->insert($insert);
    }
    else{
        DB::table('question')->insert($insert);
    }
    
    dd('bạn đã chọn thành công');
}
}
