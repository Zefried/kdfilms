<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Services\ImageService;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function list()
    {
        $blogs = Blog::latest()->get();
        return view('admin.blog.list',compact('blogs'));
    }

    public function form($id = null)
    {
        if ($id) {
            $blog = Blog::findOrFail($id);
            return view('admin.blog.form',compact('blog'));
        } else {
            return view('admin.blog.form');
        }
        
    }
    public function save(Request $request)
    {
        $this->validate($request,[
            'blog_id' => 'nullable|numeric|exists:blogs,id',
            'heading' => 'required|string|max:100',
            'image' => 'required_without:blog_id|nullable|image|mimes:jpg,jpeg,png|max:2048',
            'desc' => 'required|string|max:2000',
        ]);
        $id = $request->blog_id;
        if ($id) {
            $blog = Blog::findOrFail($id);
        }else{
            $blog = new Blog();
        }
        $blog->heading = $request->heading;
        $blog->desc = $request->desc;
        if ($request->hasFile('image')) {
            ImageService::delete($blog->image);
            $blog->image = ImageService::save($request->file('image'));
        }
        $blog->save();
        if ($id) {
            return redirect()->route('admin.blog.list')->with('message','Blog Updated Successfully');
        }else{
            return redirect()->route('admin.blog.list')->with('message','Blog Created Successfully');
        }
    }

    public function status($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->status = $blog->status == 1 ? 2 : 1;
        $blog->save();
        return back();
    }

    public function deleteBlog($id)
    {
        $blog = Blog::find($id);
        if ( $blog && $blog->delete()) {
            
            return back()->with('message', "Blog Deleted Successfully");
        } else {
            return back()->with('error', "Blog Deletation failed");
        }
    }

}
