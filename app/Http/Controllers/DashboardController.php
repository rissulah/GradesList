<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
use App\Models\Grade;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $totalStudents = Student::count();
        $totalSubjects = Subject::count();
        $totalGrades = Grade::count();

        return view('dashboard', compact('totalStudents', 'totalSubjects', 'totalGrades'));
    }
}