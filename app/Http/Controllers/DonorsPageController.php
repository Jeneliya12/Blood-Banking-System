<?php

namespace App\Http\Controllers;
use App\Donor;
use Illuminate\Http\Request;

class DonorsPageController extends Controller
{
	public function index(){
 		$donor= Donor::get();
 		return view('Donors.donorspage', compact('donor'));
 	}
}
