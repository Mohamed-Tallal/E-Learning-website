<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $guarded =['id'];
protected $fillable=['id','name','phone','specilaty','img'];
    public function course(){
        return $this->hasMany('app\Model\Course','trainer_id');
    }

}
