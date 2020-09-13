<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Model\Category;
use App\Model\Course;
use Illuminate\Http\Request;

class CategoryController extends Controller
{


    public function index()
    {
        $categories = Category::paginate(6);
        return view('Admin.Category.index',compact('categories'));
    }



    public function create(){
        return view('Admin.Category.create');
    }



    public function store(CategoryRequest $request){
        Category::create([
            'name' => $request->name
        ]);
        return redirect()->route('Category-page.index');
    }



    public function edit($id){
      $category =  Category::findOrFail($id);
        return view('Admin.Category.edit',compact('category'));
    }


    public function update(CategoryRequest $request , $id){
        $category =  Category::findOrFail($id);
        $reUpdate = [
            'name' => $request->name
        ];
        $category->update($reUpdate);
        return redirect()->route('Category-page.index');
    }

    public function destroy($id){
      $cateory =  Category::findOrfail($id);
      $cateory->delete();
        return redirect()->route('Category-page.index');
    }


}
