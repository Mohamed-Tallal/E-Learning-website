<?php

namespace App\Providers;

use App\Model\Category;
use App\Model\Course;
use Illuminate\Support\ServiceProvider;

class ViewCourseCatProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('Front.include.header',function ($view){
           $cat = Category::select('id','name')->orderBy('id', 'DESC')->paginate(5);
           $course = Course::select('id','name')->orderBy('id', 'DESC')->paginate(5);
           $view->with([
               'cat' => $cat,
               'course' => $course
           ]);
        });
    }
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
