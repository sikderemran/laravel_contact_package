<?php

namespace Emran\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Emran\Contact\Models\Contact;
use Emran\Contact\Mail\ContactMailAble;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
    public function index(){
        return view('contact::contact');
    }

    public function send(Request $request){
        Mail::to(config('contact.send_email_to'))->send(new ContactMailAble(
            $request->message,
            $request->name
        ));
        Contact::create($request->all());
        return back();
    }
}
