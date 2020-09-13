<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded =['id'];
    protected $fillable = ['id','name','smail_des','describe','price','img','category_id ','trainer_id'];

    public function category(){
        return $this->belongsTo('App\Model\Category','category_id');
    }

    public function trainer(){
        return $this->belongsTo('App\Model\Trainer','trainer_id');
    }

    public function student(){
        return $this->belongsToMany('App\Model\Student','course_student','student_id','course_id');
    }

    public function video(){
        return $this->hasMany('App\Model\Video','course_id');
    }

}
