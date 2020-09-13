<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded =['id'];
    protected $fillable = ['id','name'];

    public function course(){
    return $this->hasMany('App\Model\Course','category_id ');
    }
}
