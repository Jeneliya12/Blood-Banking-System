<?php

namespace App\Http\Controllers\Admin;
use App\Question;
use App\Abouts;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutPagesController extends Controller
{
	public function index(){
 		$about= Abouts::get();
 		$question= Question::get();
 		return view('about', compact('about', 'question'));
 	}
 	public function paypal(){
 		return view('paypal');
 	}
	// public function show(Abouts, $about, $id)
 //    {
 //        $about= Abouts::findOrFail($id);
 //        return view('about')->with('about', $about);
 //    }

}
