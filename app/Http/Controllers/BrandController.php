<?php

namespace App\Http\Controllers;

use App\Http\Requests\BrandCreateRequest;
use App\Http\Requests\BrandUpdateRequest;
use Exception;
use FileSystem;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use function PHPUnit\Framework\returnSelf;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('adminNew.pages.brand', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminNew.pages.createBrand');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandCreateRequest $request)
    {
        $validated = $request->only(['name', 'logo']);
        $path = FileSystem::storeFile($validated['logo'], 'brand/logo');

        try {
            $brands =  Brand::create([
                'name' => $validated['name'],
                'logo' => $path,
            ]);
        } catch (Exception $e) {
            Log::error($e);
        }
        return redirect()->route('brand.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = Brand::where('id', $id)->first();

        return view('adminNew.pages.createBrand', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BrandUpdateRequest $request, $id)
    {
        $brand = Brand::find($id);

        $validated = $request->only(['name', 'logo']);

        if (array_key_exists('logo', $validated)) {
            FileSystem::deleteFile($brand['logo']);
            $path = FileSystem::storeFile($validated['logo'], 'brand/logo');
            $brand->logo = $path;
        }
        if ($validated['name']) {
            $brand->name = $validated['name'];
        }
        $brand->save();
        return redirect()->route('brand.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info = Brand::where('id', $id)->first();
        FileSystem::deleteFile($info['logo']);
        Brand::where('id', $id)->delete();
        return redirect()->route('brand.index');
    }
}
