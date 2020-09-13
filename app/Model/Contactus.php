<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    protected $table = 'contactuss';
    protected $guarded = ['id'];
    protected $fillable = ['id' ,'name','email','subject','message'];
}
