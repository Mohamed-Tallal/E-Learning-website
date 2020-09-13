<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/','Front\Home@index')->name('home');

Route::get('/course/{id}','Front\CourseController@show')->name('course.category');

Route::get('/content/{id}','Front\CourseController@content')->name('course.content');

Route::get('/Contact-us','Front\ContactController@contact')->name('course.contact');

Route::get('/course/{id}/video/{video}','Front\VideoController@video')->name('course.video');

Route::get('/content/{id}','Front\CourseController@content')->name('course.content');

Route::post('/Contact-us','Front\ContactController@message')->name('course.message');

//Route::get('/Between','Admin\CourseController@testBettwen');



Route::namespace('Admin')->prefix('admin')->group(function (){
    Route::get('login','AuthController@login')->name('admin.login');
    Route::post('Post-Login','AuthController@PostLogin')->name('admin.PostLogin');
    Route::middleware('adminAuthentaction:admin')->group(function(){
        Route::get('logout','AuthController@logout')->name('admin.logout');
        Route::resource('Category-page','CategoryController')->except('show');
        Route::resource('Course-page','CourseController')->except('show');
        Route::resource('Student-page','StudentController')->except('show');
        Route::resource('Video-page','VideoController')->except('show');
        Route::resource('Trainer-page','TrainerController')->except('show');
        Route::resource('Contact-page','ContactController')->except('show','update','store','create');
        Route::resource('Admin-page','AdminController')->except('show') ;
    });
});

