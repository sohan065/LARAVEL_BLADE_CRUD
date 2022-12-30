<?php

namespace App\Services;

use Exception;
use App\Models\StudentManagement;
use Illuminate\Support\Facades\Log;
use App\Repositories\StudentRepositoryInterface;

class StudentRepositoryServices implements StudentRepositoryInterface
{
    public function  createStudent($credentials)
    {
        try {
            $result = StudentManagement::create([
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
}
