<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentManagement;

class AdminController extends Controller
{
    public function index()
    {
        $allstudent = StudentManagement::all();
        return view('admin.pages.index', compact('allstudent'));
    }
}
