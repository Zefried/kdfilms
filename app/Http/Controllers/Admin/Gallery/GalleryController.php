<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Services\ImageService;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function galleryList(Request $request)
    {
        $galleries = Gallery::latest()->get();

        return view('admin.gallery.gallery_list',compact('galleries'));
    }

    public function galleryAdd(Request $request)
    {
        $this->validate($request, [
            'image' => 'required',
            'image.*' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $images = $request->file('image');
        // dd($images);
        foreach ($images as $file) {
            $gallery = new Gallery();
            $gallery->image = ImageService::save($file);
            $gallery->save();
        }
        return redirect()->route('admin.gallery.gallerylist');
    }

    public function galleryForm(Request $request)
    {
        return view('admin.gallery.gallery_form');
    }

    public function galleryDelete($id = null)
    {
        $gallery = Gallery::find($id);
        ImageService::delete($gallery->image);
        if ($gallery->delete()) {
            return back()->with('message', "Image Deleted Sucessfully");
        }
    }
}
