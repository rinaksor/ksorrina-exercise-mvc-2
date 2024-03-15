<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class StudentController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getStudents()
    {
        $students = Student::all();
        return response()->json($students);
    }

    public function showStudents()
    {
        $students = Student::all();
        return view('students', compact('students'));
    }

    public function getStudentById($id)
    {
        $student = Student::find($id);
        if ($student) {
            return response()->json($student);
        } else {
            return "Student not found";
        }
    }

}
