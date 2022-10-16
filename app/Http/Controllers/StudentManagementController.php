<?php

namespace App\Http\Controllers;

use App\Models\StudentManagement;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class StudentManagementController extends Controller
{
    public function index()
    {

        $allstudent = StudentManagement::all();
        return view('user.pages.index', compact('allstudent'));
    }
    public function registration()
    {
        return view('user.pages.registration');
    }

    public function create(Request $request)
    {
        $request->validate([
            'student_name' => 'required|max:255',
            'registration_no' => 'required | integer',
            'department_name' => 'required',
            'info' => 'required',
        ]);

        $student = new StudentManagement();

        $student->registration_id = $request->registration_no;
        $student->name = $request->student_name;
        $student->department_name = $request->department_name;
        $student->info = $request->info;

        $student->save();

        Session()->flash('success', 'Registration successfull !!!');
        return redirect('/');
    }
    public function store()
    {
    }
    public function show()
    {
    }

    public function edit($id)
    {
        $selectedstudent = StudentManagement::find($id);

        return view('admin.pages.edit', compact('selectedstudent'));
    }

    public function update(Request $request, $id)
    {

        $studentinfo = StudentManagement::find($id);

        $studentinfo->name = $request->student_name;
        $studentinfo->registration_id = $request->registration_no;
        $studentinfo->department_name = $request->department_name;
        $studentinfo->info = $request->info;

        $studentinfo->update();

        if ($studentinfo->update() == true) {

            Session()->flash('success', 'successfully deleted');
            return redirect('/admin');
        } else {

            return "error";
        }
    }

    public function delete($id)
    {
        $deleteid = StudentManagement::find($id);

        $result = $deleteid->delete();
        if ($result == true) {

            Session()->flash('success', 'successfully deleted');
            return redirect('/admin');
        } else {

            return "error";
        }
    }
}
