<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GradeController extends Controller
{
    public function index()
    {
        $grades = Grade::with(['student', 'subject'])->latest()->paginate(15);
        return view('grades.index', compact('grades'));
    }

    public function create()
    {
        $students = Student::all();
        $subjects = Subject::all();
        return view('grades.create', compact('students', 'subjects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'subject_id' => 'required|exists:subjects,id',
            'grade' => 'required|numeric|min:0|max:100',
            'semester' => 'required',
            'academic_year' => 'required',
        ]);

        Grade::create($request->all());
        return redirect()->route('grades.index')->with('success', 'Grade added successfully');
    }

    public function reportCard(Student $student)
    {
        $grades = $student->grades()->with('subject')->get();
        return view('grades.report-card', compact('student', 'grades'));
    }
}