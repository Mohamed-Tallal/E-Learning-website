<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        $admins =Admin::get();
        return view('Admin.AdminLog.index',compact('admins'));
    }

    public function create(){
            return view('Admin.AdminLog.create');
    }

    public function store(Request $request){
        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>Hash::make( $request->password),
        ]);
        return redirect()->route('Admin-page.create');
    }
}
