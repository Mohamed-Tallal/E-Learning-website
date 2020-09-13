<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StudentRequest;
use App\Model\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students =Student::paginate(6);
        return view('Admin.Student.index',compact('students'));
    }

    public function create(){
        return view('Admin.Student.create');
    }
    public function store(StudentRequest $request){
        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'specisalty' => $request->specisalty,
        ]);
        return redirect()->route('Student-page.index');
    }

    public function edit($id){
        $students = Student::findOrFail($id);
        return view('Admin.Student.edit',compact('students'));

    }

    public function update(StudentRequest $request ,$id){
        $student = Student::findOrFail($id);
        $studentUpdate = [
            'name' => $request->name,
            'email' => $request->email,
            'specisalty' => $request->specisalty,
        ];
        $student->update($studentUpdate);
        return redirect()->route('Student-page.index');
    }


    public function destroy($id){
        Student::findOrFail($id)->delete();
        return redirect()->route('Student-page.index');
    }





}
