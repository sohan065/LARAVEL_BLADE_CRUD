<?php

namespace App\Http\Controllers;

use Exception;
use FileSystem;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\CategoryCreateRequest;
use App\Http\Requests\CategoryUpdateRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('adminNew.pages.category', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminNew.pages.createCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryCreateRequest $request)
    {
        $validated = $request->only(['name', 'icon']);
        $path = FileSystem::storeFile($validated['icon'], 'brand/icon');

        try {
            $category =  Category::create([
                'name' => $validated['name'],
                'icon' => $path,
            ]);
        } catch (Exception $e) {
            Log::error($e);
        }
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view('adminNew.pages.createCategory', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateRequest $request,  $id)
    {
        $category = Category::where('id', $id)->first();

        $validated = $request->only(['name', 'icon']);

        if (array_key_exists('icon', $validated)) {

            FileSystem::deleteFile($category['icon']);
            $path = FileSystem::storeFile($validated['icon'], 'category/icon');
            Category::where('id', $id)->update([
                'icon' => $path
            ]);
        }
        if ($validated['name']) {
            Category::where('id', $id)->update([
                'name' =>  $validated['name']
            ]);
        }

        $categories = Category::all();
        return view('adminNew.pages.category', compact('categories'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info = Category::where('id', $id)->first();
        FileSystem::deleteFile($info['icon']);
        Category::where('id', $id)->delete();
        return redirect()->route('category.index');
    }
}
