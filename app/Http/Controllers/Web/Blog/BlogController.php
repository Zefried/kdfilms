<?php

namespace App\Http\Controllers\Web\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function list() {
        $blogs = Blog::latest()->where('status',1)->get();
        return view('web.blog',compact('blogs'));
    }
    public function details($id) {
        $blog = Blog::findOrFail($id);
        $other_blogs = Blog::latest()->where('id','!=',$id)->where('status',1)->get();
        return view('web.blogdetails', compact('blog','other_blogs'));
    }
}
