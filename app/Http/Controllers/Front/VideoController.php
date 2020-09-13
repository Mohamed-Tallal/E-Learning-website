<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Model\Course;
use App\Model\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function video($idl,$video){
        $videoYout = Video::findOrFail($video);
        $videos = Video::where(['course_id' => $idl])->select('id','name','urlVideo','descripe','course_id')->get();
        return view('Front.Course.video',compact('videos','videoYout','idl'));

    }

}
