<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('Admin.AdminLog.login');
    }
    public function PostLogin(Request $request){
        if (! auth()->guard('admin')->attempt(['email' => $request->email , 'password' => $request->password])){
            return back();
        }
        else{
            return redirect()->route('Admin-page.index');
        }
   }
   public function logout(){
       auth()->guard('admin')->logout();
    return redirect()->route('admin.login');
}
}
