<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Session;
class ContactemailController extends Controller
{
    function index()
    {
     return view('contact');
    }

    function send(Request $request)
    {
     $this->validate($request, [
      'name'     =>  'required',
      'number'       =>'required',
      'email'    =>  'required|email',
      'message'  =>  'required',
     ]);

        $values = array(
            'name'      =>  $request->name,
            'number'    =>   $request->number,
            'email'   =>      $request->email,
            'message'   =>   $request->message,
        );

     Mail::to('gurungjeneliya@gmail.com')->send(new ContactMail($values));

     Session::flash('statuscode','success');
     return back()->with('status', 'Thanks for contacting us. We will soon try to reach to you'); 
    }
}

?>
