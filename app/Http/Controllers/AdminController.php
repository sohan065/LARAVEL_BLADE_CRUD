<?php

namespace App\Http\Controllers;

use App\Models\Student;


class AdminController extends Controller
{
    public function index()
    {
        $allstudent = Student::all();
        return view('admin.pages.index', compact('allstudent'));
    }
}
