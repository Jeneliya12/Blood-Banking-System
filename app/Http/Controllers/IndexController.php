<?php

namespace App\Http\Controllers;
use App\Donor;
use App\Employ;
use App\News;
use App\Abouts;
use App\Country;
use App\Blood;

use Illuminate\Http\Request;

class IndexController extends Controller
{
	public function index(){
 		$donor= Donor::get();
 		$employ=Employ::get();
 		$news= News::orderBy('date', 'DESC')->take(10)->get();
 		$about=Abouts::get();
 		$country=Abouts::get();
 		$blood=Blood::get();
 		return view('Index.index', compact('donor', 'employ', 'news', 'about', 'country', 'blood'));
 	}
 	public function show(Donor $donor, $id)
    {
        $donor= Donor::findOrFail($id);
        return view('sortblood')->with('donor', $donor);
    } 

}


