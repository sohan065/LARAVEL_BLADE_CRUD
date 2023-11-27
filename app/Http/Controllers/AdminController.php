<?php

namespace App\Http\Controllers;

use Exception;
use FileSystem;
use App\Models\Brand;
use App\Models\Student;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\BrandCreateRequest;

class AdminController extends Controller
{

    // public function createBrand(BrandCreateRequest $request)
    // {
    //     $validated = $request->only(['name', 'logo']);
    //     $path = FileSystem::storeFile($validated['logo'], 'brand/logo');

    //     try {
    //         $brands =  Brand::create([
    //             'name' => $validated['name'],
    //             'logo' => $path,
    //         ]);
    //     } catch (Exception $e) {
    //         Log::error($e);
    //     }
    //     return view('adminNew.pages.index');
    // }

    public function storeBrand()
    {
        return view('adminNew.pages.addbrand');
    }
    public function getAllbrand()
    {
        $brands = Brand::all();
        return view('adminNew.pages.brand', compact('brands'));
    }

    public function index()
    {
        $allstudent = Student::all();
        return view('admin.pages.index', compact('allstudent'));
    }
}
