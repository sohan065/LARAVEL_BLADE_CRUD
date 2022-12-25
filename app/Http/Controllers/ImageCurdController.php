<?php

namespace App\Http\Controllers;

use view;

use App\Models\ImageCurd;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ImageCurdController extends Controller
{
    public function index()
    {
        $selectAll = ImageCurd::all();

        return view('user.pages.image', compact('selectAll'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'image' => 'required|mimes:png,jpg,jpeg',

        ]);
        if ($image = $request->file('image')) {
            $imageName = time() . '-' . uniqid() . '.'
                . $image->getClientOriginalName();

            $image->move('images/products', $imageName);
        }

        $image = new ImageCurd();
        $image->name = $request->name;
        $image->image_name = $imageName;

        $image->save();
        if ($image->save() == true) {

            Session()->flash('success', 'Image added successfully!!!');
            return redirect('/image');
        } else {
            return "error";
        }
    }
    public function edit($id)
    {
        $selectedStudent = ImageCurd::find($id);
        return view('user.pages.edit', compact('selectedStudent'));
    }
    public function update(Request $request, $id)
    {
        $select_id = ImageCurd::find($id);
        $request->validate([
            'name' => 'required',
        ]);
        $oldimage = 'images/products/' . $select_id->image_name;

        if ($imagefile = $request->file('image')) {

            if (File::exists($oldimage)) {
                File::delete($oldimage);
            }

            $imageName = time() . '-' . uniqid() . '.'
                . $imagefile->getClientOriginalName();
            $imagefile->move('images/products', $imageName);
            $select_id->name = $request->name;
            $select_id->image_name = $imageName;
            $select_id->update();
        } else {

            $select_id->name = $request->name;
            $select_id->update();
        }

        if ($select_id->update() == true) {

            Session()->flash('success', 'successfully updated');
            return redirect('/image');
        } else {

            return "error";
        }
    }

    public function delete($id)
    {

        $delected_id = ImageCurd::find($id);

        $delete_image = 'images/products/' . $delected_id->image_name;

        File::delete($delete_image);

        $res = $delected_id->delete();
        if ($res == true) {
            Session()->flash('success', 'successfully deleted');
            return redirect('/image');
        } else {

            return "error";
        }
    }
}
