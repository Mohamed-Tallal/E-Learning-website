<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Model\Contactus;
use Illuminate\Http\Request;

class ContactController extends Controller
{
        public function contact(){
            return view('Front.Course.contactUs');
        }

    public function message(ContactRequest $request){
        Contactus::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        return view('Front.Course.contactUs');

    }
}
