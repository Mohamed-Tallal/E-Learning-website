<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Contactus;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contact_us = Contactus::paginate(6);
        return view('Admin.Contact.index',compact('contact_us'));
    }
    public function edit($id){
    $contact_us = Contactus::findOrFail($id);
    return view('Admin.Contact.repliy',compact('contact_us'));
}
public function destroy($id){
    Contactus::findOrFail($id)->delete();
    return redirect()->route('Contact-page.index');
}
}
