<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\ServeySheet;
use App\User_lecturer;
class ControllerServeySheet extends Controller
{
    public function servey_sheet_list() {
        $sheet = ServeySheet::all();
    	return view('admin.servey.servey_sheet')->with('sheet', $sheet);
    }

    public function servey_sheet_get_add() {
        return view('admin.servey.sheet_add');
    }

    public function servey_sheet_post_add(Request $request) {
        $sheet = new ServeySheet();
        $sheet->question_text = $request->txtQuestion;    
        $sheet->save();
        return redirect('admin/servey/servey_sheet_list');
    }
    public function servey_sheet_get_edit($id) {
        $sheet = ServeySheet::find($id);
        return view('admin.servey.sheet_edit')->with('sheet',$sheet);
    }
    public function servey_sheet_post_edit(Request $request, $id) {
        $sheet = ServeySheet::find($id);
        $sheet->question_text = $request->txtQuestion;
        $sheet->save();
        return redirect('admin/servey/servey_sheet_edit/'.$id);
    }
    public function servey_sheet_delete($id) {
        $sheet = ServeySheet::find($id);
        $sheet->delete();

        return redirect('admin/servey/servey_sheet_list');
    }
}
