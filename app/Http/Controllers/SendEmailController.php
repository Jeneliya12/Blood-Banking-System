<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Session;
class SendEmailController extends Controller
{
    function index()
    {
     return view('Donors.show');
    }

    function send(Request $request)
    {
     $this->validate($request, [
      'name'     =>  'required',
      'number'       =>'required',
      'email'    =>  'required|email',
      'address'  =>'required',
      'message'  =>  'required',
     ]);

        $data = array(
            'name'      =>  $request->name,
            'number'    =>   $request->number,
            'message'   =>   $request->message,
            'address'   =>  $request->address
        );

// $emails = ['gurungjeneliya@gmail.com', 'gurungbimla09@gmail.com',];

// Mail::send($data, [], function($message) use ($emails)
// {    
//     $message->to($emails); 
//     Session::flash('statuscode','success');
//      return back()->with('status', 'Thanks for contacting us. Your request has successfully sent to the donor.');    
// });
 Mail::to('gurungjeneliya@gmail.com')->send(new SendMail($data));

     Session::flash('statuscode','success');
     return back()->with('status', 'Thanks for contacting us. Your request has successfully sent to the donor.'); 
    }
}

