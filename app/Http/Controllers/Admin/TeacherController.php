<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use DB;
use App\Models\Classes;

class TeacherController extends Controller
{
    //

    public function index()
    {
        $data = DB::table("teachers")->leftJoin("classes", "teachers.class_id", "classes.id")->select('classes.class_name', 'teachers.*')->get();

        // $data = Teacher::all();
        return view("admin.teacher.index", compact("data"));
    }

    public function create(Request $request)
    {
        $class = DB::table("classes")->get();
        return view("admin.teacher.create", compact("class"));
    }

    public function store(Request $request)
    {
        $request->validate([
            'class_id' => 'required',
            'teacher_name' => 'required',
        ]);
        $data = array(
            'class_id' => $request->class_id,
            'teacher_name' => $request->teacher_name,
        );
        DB::table('teachers')->insert($data);
        // $notification = array('messege' => 'Teachers Data inserted Successfully', 'alert-type' => 'success');
        // return redirect()->back()->with($notification);
        return redirect()->back()->with('success', 'Data inserted successfully');

    }

    public function destroy($id)
    {
        Teacher::destroy($id);
        return redirect()->back()->with('success', 'Data deleted successfully');
    }

    public function edit($id)
    {
        $class = Classes::all();
        $teacher = Teacher::find($id);
        return view('admin.teacher.edit', compact('class', 'teacher'));

    }

    public function update(Request $request, string $id)
    {


        $teacher = Teacher::find($id);
        $teacher->class_id = $request->class_id;
        $teacher->teacher_name = $request->teacher_name;

        $teacher->save();



        return redirect()->route('teachers')->with('success', 'successfully Update');
    }

}
