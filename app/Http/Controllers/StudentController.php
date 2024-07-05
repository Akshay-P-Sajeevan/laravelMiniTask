<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\StudentOptedCourse;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('parent', 'optedCourses.course')->get();
        return view('students.index', compact('students'));
    }

    public function toggleStatus(Request $request)
    {
        $id = $request->input('id');
        $isActive = $request->input('is_active');

        $course = StudentOptedCourse::find($id);
        if (!$course) {
            return response()->json(['status' => 'error', 'message' => 'Course not found']);
        }

        $course->is_active = !$isActive;
        $course->save();

        return response()->json(['status' => 'success', 'message' => 'Status toggled successfully']);
    }
}
