<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Youtube;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    function index(){
        $data = Youtube::latest()->get();
        return view('web.index',compact('data'));
    }
}
