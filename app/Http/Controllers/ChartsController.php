<?php

namespace App\Http\Controllers;
use App\Donor;
use Illuminate\Http\Request;
use App\Charts\Donorschart;

class ChartsController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index(Request $request)
    {
        $bg= Donor::orderBy('blood')->pluck('id', 'address');

        $chart = new Donorschart;
        $chart->labels($bg->keys());
        $chart->dataset('id', 'bar', $bg->values())->backgroundColor('orange'); 
      
       
        return view('Admin.donors_charts', compact('chart'));
         //return view('Donors.graph', compact('chart'));
    }

}
