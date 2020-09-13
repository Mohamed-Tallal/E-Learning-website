<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CourseRequest;
use App\Http\Requests\Admin\UpCourseRequest;
use App\Model\Category;
use App\Model\Course;
use App\Model\Trainer;
use Illuminate\Http\Request;

class CourseController extends Controller
{

        public function index(){
            $courses = Course::paginate(6);
            return view('Admin.Course.index',compact('courses'));
        }
        public function create(){
            $courses = Course::get();
            $category = Category::select('id','name')->get();
            $trainer = Trainer::select('id','name')->get();
            return view( 'Admin.Course.create',compact('courses','category','trainer'));
        }


        public function store(CourseRequest $request){
            $file = $request->img ->getClientOriginalExtension();
            $file_name = time().'.'.$file;
            $path = 'Front/uploads/courses';
            $request->img->move($path,$file_name);

            Course::create([
                'name' => $request->name,
                'price' => $request->price,
                'smail_des' => $request->smail_des,
                'describe' => $request->describe,
                'category_id' => $request->category_id,
                'trainer_id' => $request->trainer_id,
                'img' => $file_name
            ]);
            return redirect()->route('Course-page.index');
        }


        public function edit($id){
            $courses = Course::findOrFail($id);
            $category = Category::select('id','name')->get();
            $trainer = Trainer::select('id','name')->get();
            return view('Admin.Course.edit',compact('courses','category','trainer'));
        }

            

        
        public function update(UpCourseRequest $request ,$id){
            $course = Course::findOrFail($id);
            
            if ($request->img != '') {
                $file = $request->img ->getClientOriginalExtension();
                $file_name = time().'.'.$file;
                $path = 'Front/uploads/courses';
                $request->img->move($path, $file_name);

                $courseUpdate =  [
                    'name' => $request->name,
                    'price' => $request->price,
                    'smail_des' => $request->smail_des,
                    'describe' => $request->describe,
                    'category_id' => $request->category_id,
                    'trainer_id' => $request->trainer_id,
                    'img' => $file_name
                ];
            }
                else{
                    $courseUpdate =[
                'name' => $request->name,
                'price' => $request->price,
                'smail_des' => $request->smail_des,
                'describe' => $request->describe,
                'category_id' => $request->category_id,
                'trainer_id' => $request->trainer_id,
                ] ;
           } 
            $course->update($courseUpdate);
            return redirect()->route('Course-page.index');
        }


        public function destroy($id){
           Course::findOrFail($id)->delete();
            return redirect()->route('Course-page.index');
        }

}
