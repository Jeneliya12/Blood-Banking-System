<?php

namespace App\Http\Controllers;
use App\Donor;
use App\Country;
use App\City;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function index(){
 		$country= Country::all();

 		return view('testing', compact('country'));
 	}

 	public function getCities($id){
 		$cities= City::where('country_id', $id)->pluck("name", "id");
 		return json_encode($cities);
 	}
 	public function getData($id)
 	{
 		$data= Donor::where("city_id", $id)->get();
 		return view('data_view', compact('data'));
 	}
}
