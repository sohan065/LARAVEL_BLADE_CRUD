<?php

namespace App\Services;

use Exception;

use App\Models\Student;
use App\Models\Department;
use Illuminate\Support\Facades\Log;
use App\Repositories\StudentRepositoryInterface;

class StudentRepositoryServices implements StudentRepositoryInterface
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
    public function  createStudent($credentials)
    {
        try {
            $result = Student::create([
                'registration_id' => $credentials['registration_no'],
                'name' => $credentials['student_name'],
                'department_name' => $credentials['department_name'],
                'info' => $credentials['info'],
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
    }
    public function edit($id)
    {
        $selectedstudent = Student::find($id);

        return view('admin.pages.edit', compact('selectedstudent'));
    }

    public function update($credentials, $id)
    {
        try {
            $result = Student::where('id', $id)->update([
                'registration_id' => $credentials['registration_no'],
                'name' => $credentials['student_name'],
                'department_name' => $credentials['department_name'],
                'info' => $credentials['info'],
            ]);
        } catch (Exception $e) {
            return $e;
            $result = false;
        }

        if ($result) {
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
