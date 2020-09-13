<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TrainerRequest;
use App\Http\Requests\Admin\UpTrainerRequest;
use App\Model\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function index(){
        $trainers = Trainer::paginate(6);
        return view('Admin.Trainer.index',compact('trainers'));
    }

    public function edit($id){
        $trainers = Trainer::findOrFail($id);
        return view('Admin.Trainer.edit',compact('trainers'));
    }

    public function create(){
        return view('Admin.Trainer.create');
    }

    public function store(TrainerRequest $request){

        $file_extention = $request->img ->getClientOriginalExtension();
        $file_name = time().'.'.$file_extention;
        $path = 'Front/uploads/trainer';
        $request->img->move($path,$file_name);
         Trainer::create([
            'name' => $request->name,
            'img' => $file_name ,
            'phone' => $request->phone,
            'specilaty' => $request ->specilaty
        ]);
        return redirect()->route('Trainer-page.index');
    }

    public function update(UpTrainerRequest $request,$id){
        $trainer = Trainer::findOrFail($id);

      
     if($request->img != ''){        
        $file_extention = $request->img ->getClientOriginalExtension();
        $file_name = time().'.'.$file_extention;
        $path = 'Front/uploads/trainer';
        $request->img->move($path,$file_name);
        $trainerReq = [
            'name' => $request->name,
            'img' => $file_name ,
            'phone' => $request->phone,
            'specilaty' => $request ->specilaty
        ];
        }
        else{
            $trainerReq = [
                'name'=>$request->name,
                'phone'=>$request->phone,
                'specilaty'=>$request->specilaty,
            ];
        }

        $trainer->update($trainerReq);
        return redirect()->route('Trainer-page.index');
    }

    public function destroy($id){
        Trainer::findOrfail($id)->delete();
        return redirect()->route('Trainer-page.index');

    }
}
