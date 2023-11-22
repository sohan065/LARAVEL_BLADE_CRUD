<?php

namespace App\Http\Controllers;

use Student;
use Illuminate\Http\Request;

class StudentManagementController extends Controller
{
    public function lte()
    {
        return view('adminNew.pages.index');
    }
    public function index()
    {
        return Student::index();
    }

    public function registration()
    {
        return Student::registration();
    }

    public function create(Request $request)
    {
        $request->validate([
            'student_name' => 'required|max:255',
            'registration_no' => 'required | integer',
            'department_name' => 'required',
            'info' => 'required',
        ]);

        $validated = $request->only(['student_name', 'registration_no', 'department_name', 'info']);

        return Student::createStudent($validated);
    }

    public function edit($id)
    {
        return Student::edit($id);
    }

    public function update(Request $request, $id)
    {

        $credentials = $request->all();

        return Student::update($credentials, $id);
    }

    public function delete($id)
    {
        return Student::delete($id);
    }
}