<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\newMail;
use App\Http\Requests\EnquiryFormRequest;



class ContactController extends Controller
{
     public function index(){
         return view('index');
     }
    public function contact(Request $request)
    {
        if (isset($_POST['submit'])) {
            $data = $request->session()->all();

            Mail::send(new newMail());
            $request->session()->flush();
            return redirect('/contact')->with('flash_message_success','Your Application Has Been Sent Successfully');die;
    }
    return view('form.contact');
    }
    public function contact1(Request $request)
    {
        if (isset($_POST['submit'])) {
            $data = $request->session()->all();

            Mail::send(new OrderShipped());
            $request->session()->flush();
            return redirect('/contact1')->with('flash_message_success','Your Application Has Been Sent Successfully');die;
    }
    return view('form.contact1');
    }


}
