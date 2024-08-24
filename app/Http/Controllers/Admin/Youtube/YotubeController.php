<?php

namespace App\Http\Controllers\Admin\Youtube;

use App\Http\Controllers\Controller;
use App\Models\Youtube;
use Illuminate\Http\Request;

class YotubeController extends Controller
{
    function list(){
        $list = Youtube::latest()->get();
        return view('admin.youtube.list',compact('list'));
        
    }
    function form($id=null){
        if ($id) {
           $data = Youtube::findOrFail($id);
           return view('admin.youtube.form',compact('data'));
        } else {
            return view('admin.youtube.form');
        }
    }

    function submit(Request $request){
        $this->validate($request,[
            'youtube_id' => 'nullable|numeric|exists:youtubes,id',
            'video_link' => 'required|string|max:100',
        ]);

        $id = $request->youtube_id;
        if ($id) {
            $data = Youtube::findOrFail($id);
        } else {
            $data = new Youtube();
        }

        $url = $request->input('video_link');
        parse_str( parse_url( $url, PHP_URL_QUERY ), $urlid );

        $data->video_id = $urlid['v'];
        $data->save();

        return redirect()->route('admin.youtube.list')->with('message', 'Video Added Successfully');
    }
}
