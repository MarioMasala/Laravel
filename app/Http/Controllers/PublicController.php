<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
   public function homepage () {
        return view('welcome');
    }
    public function contactSubmit(Request $request){
     $name = $request->name;
     $email = $request->email;
     $message = $request->message;
     $userData = compact('name','email','message');
     Mail::to('admin@mail.it')->send(new AdminMail($userData));
     return redirect()->route('homepage')->with('successMessage','La tua mail è stata inviata con successo');
    }


    public function profile(){
        return view('profile');
    }
}
