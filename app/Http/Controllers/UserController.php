<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use DB;


class UserController extends Controller
{
    public function users()
    {
        $studs = Student::orderBy('id', 'DESC')->get();
        return view('users', ['studs' => $studs]);
    }

    public function add_st_details(Request $request)
    {
        $add_details = new Student();
        $add_details->st_name=$request->post('st_name');
        $add_details->st_roll_no=$request->post('st_roll_no');
        $add_details->st_class=$request->post('st_class');
        $add_details->st_subject=$request->post('st_subject');
        $add_details->st_email=$request->post('st_email');
        $add_details->st_percentage=$request->post('st_percentage');
        $add_details->save();

       return redirect('/users');

    }

    public function edit_details($id)
    {
        $data=DB::Select("Select * from student_details where id=$id");
        return response()->json($data);
 
        return redirect('/users'); 
    }

    public function edit_st_details(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $student->st_name = $request->input('edit_name');
        $student->st_roll_no = $request->input('edit_st_roll_no');
        $student->st_class = $request->input('edit_class');
        $student->st_subject = $request->input('edit_subject');
        $student->st_email = $request->input('edit_st_email');
        $student->st_percentage = $request->input('edit_percentage');

        $student->save();
        return redirect('/users');
        return response()->json(['success' => true, 'message' => 'Student details updated successfully']);
    }

    public function delete_st_details($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/users'); 
    }

}