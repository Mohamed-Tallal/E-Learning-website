<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Course;
use App\Model\Student;
use App\Model\Trainer;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index(){
    $courses = Course::select('id','name','price','img','smail_des','trainer_id','category_id')
    ->orderBy('id','desc')->paginate(6);
    $course_count =Course::count();
    $student_count = Student::count();
    $traner_count = Trainer::count();
    return view('Front.index',compact('courses','course_count','student_count','traner_count')) ;
    }
}
