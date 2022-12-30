<?php

namespace App\Services;

use App\Models\Department;
use Exception;
use Illuminate\Support\Facades\Log;
use App\Repositories\DepartmentRepositoryInterface;
use Illuminate\Support\Facades\DB;

class DepartmentRepositoryServices implements DepartmentRepositoryInterface
{
    public function storeDepartment($credentials)
    {
        try {
            $result = Department::create([
                'name' => $credentials['name'],
                'code' => $credentials['code'],
            ]);
        } catch (Exception $e) {
            Log::error($e);
            $result = false;
        }
        if ($result) {
            return response(['message' => 'created'], 201);
        }
        return response(['message' => 'fail'], 406);
    }
    public function showData()
    {
        $students = DB::table('students')
            ->join('departments', 'students.id', '=', 'departments.id')
            ->select('students.*', 'departments.*')
            ->get();
    }
}
