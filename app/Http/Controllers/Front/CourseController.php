<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Course;
use App\Model\Video;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function show($id){
        $category =   Category::findOrFail($id);
        $courses = Course::where('category_id',$id)->paginate(3);

        return view('Front.Course.courseCategory',compact('category','courses'));
    }

    public function content($id){
        $course = Course::findOrFail($id);
        $video = Video::where('course_id',$id)->select('id')->first();
        return view('Front.Course.content',compact('course','video'));
    }



}
