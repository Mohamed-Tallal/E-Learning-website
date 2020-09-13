<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\VideoRequest;
use App\Model\Course;
use App\Model\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index(){
        $videos =Video::paginate(6);
        return view('Admin.Video.index',compact('videos'));
    }

    public function create(){
        $courses =Course::get();
        return view('Admin.Video.create',compact('courses'));

    }
    public function store(VideoRequest $request){
       Video::create( [
           'name' => $request->name,
           'urlVideo' => $request->urlVideo,
           'course_id' => $request->course_id,
           'descripe' => $request->descripe,
       ]);
        return redirect()->route('Video-page.index');

    }
    public function edit($id){
        $videos =Video::findOrFail($id);
        $courses =Course::get();
        return view('Admin.Video.edit',compact('courses','videos'));
    }
    public function update(VideoRequest $request,$id){
    $video =Video::findOrFail($id);
    $videoRe1 = [
        'name' => $request->name,
        'urlVideo' => $request->urlVideo,
        'course_id' => $request->course_id,
        'describe' => $request->describe,
    ];
        $video->update($videoRe1);
        return redirect()->route('Video-page.index');
}

    public function destroy($id){
    Video::findOrFail($id)->delete();
        return redirect()->route('Video-page.index');
}



}
