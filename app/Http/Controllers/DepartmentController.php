<?php

namespace App\Http\Controllers;


use Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DepartmentController extends Controller
{
    public function storeDepartment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'bail|required|string|min:3',
            'code' => 'bail|required|integer',
        ]);
        if ($validator->fails()) {
            return response($validator->messages(), 422);
        }
        $validated = $request->only(['name', 'code']);
        return Department::storeDepartment($validated);
    }
    public function showData()
    {
        return Department::showData();
    }
}
