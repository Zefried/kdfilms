<?php

namespace App\Http\Controllers\Web\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function list() {
        $galleries = Gallery::latest()->get();
        return view('web.gallery',compact('galleries'));
    }
}

