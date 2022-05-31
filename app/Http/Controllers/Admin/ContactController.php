<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\SendNewMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('admin.contacts.contact');
}

    public function mailSender(Request $request){
        // dd($request->mail_message, $request->userMail);
        Mail::to($request->userMail)->send(new SendNewMail( $request->mail_message, $request->userMail));

        return redirect()->route('contacts.recived');
    }

    public function recived(){
        return view('admin.contacts.recived');
    }
}
