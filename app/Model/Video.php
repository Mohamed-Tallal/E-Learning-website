<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $guarded= ['id'];
    protected $fillable = ['id','name','urlVideo','descripe','course_id'];

    public function course(){
        return $this->belongsTo('App\Model\Course','course_id');
    }
}
