<?php

namespace App\Http\Controllers\Api;

use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function index()
    {

        $students = Student::all();
        if ($students->count() > 0) {
            return response()->json([
                'status' => 200,
                'student' => $students
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'No Records Found'
            ], 404);

        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:191',
            'course' => 'required|string|max:191',
            'email' => 'required|email|max:191',
            'phone' => 'required|digits:10',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validator->message()
            ], 422);
        } else {
            $student = Student::create([
                'name' => $request->name,
                'course' => $request->course,
                'email' => $request->email,
                'phone' => $request->phone,
            ]);
            if ($student) {
                return response()->json([
                    'status' => 200,
                    'message' => "Student Created Successfully"
                ]);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => "Someting went wrong"
                ]);

            }
        }
    }
}
