<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded =['id'];
    protected $fillable=['id','name','email','specisalty'];
    public function course(){
        return $this->belongsToMany('App\Model\Course','course_student','student_id','course_id');
    }


}
