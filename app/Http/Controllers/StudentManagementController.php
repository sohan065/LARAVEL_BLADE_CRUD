<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Student;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StudentManagementController extends Controller
{
    public function index()
    {
        $allstudent = Student::all();
        return view('user.pages.index', compact('allstudent'));
    }

    public function registration()
    {
        return view('user.pages.registration', [
            'dept' => Department::all(),
        ]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'student_name' => 'required|max:255',
            'registration_no' => 'required | integer',
            'department_name' => 'required',
            'info' => 'required',
        ]);
        try {
            $result = Student::create([
                'registration_id' => $request['registration_no'],
                'name' => $request['student_name'],
                'department_name' => $request['department_name'],
                'info' => $request['info'],
            ]);
        } catch (Exception $e) {
            Log::error($e);
            return $e;
            $result = false;
        }
        if ($result) {
            Session()->flash('success', 'Registration successfull !!!');
            return redirect('/');
        }
        return response(['message' => 'fail'], 406);

        // $validated = $request->only(['student_name', 'registration_no', 'department_name', 'info']);

        // return Student::createStudent($validated);

        // $student = new Student();

        // $student->registration_id = $request->registration_no;
        // $student->name = $request->student_name;
        // $student->department_name = $request->department_name;
        // $student->info = $request->info;

        // $student->save();

        // Session()->flash('success', 'Registration successfull !!!');
        // return redirect('/');
    }
    public function store()
    {
    }
    public function show()
    {
    }

    public function edit($id)
    {
        $selectedstudent = Student::find($id);

        return view('admin.pages.edit', compact('selectedstudent'));
    }

    public function update(Request $request, $id)
    {

        $studentinfo = Student::find($id);

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
        $deleteid = Student::find($id);

        $result = $deleteid->delete();
        if ($result == true) {

            Session()->flash('success', 'successfully deleted');
            return redirect('/admin');
        } else {

            return "error";
        }
    }
}
