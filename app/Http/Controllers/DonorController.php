<?php

namespace App\Http\Controllers;
use App\Donor;
use Illuminate\Http\Request;
use App\Charts\Donorschart;

class DonorController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index(Request $request)
    {
        $bg= Donor::orderBy('blood')->pluck('age', 'blood');

        $donors= Donor::orderBy('blood')->pluck('id', 'blood');

        $chart = new Donorschart;
        $chart->labels($bg->keys());
        $chart->dataset('Blood Group', 'bar', $bg->values())->backgroundColor('red'); 
      
        $charts = new Donorschart;
        $charts->labels($donors->keys());
        $charts->dataset('Blood Group', 'line', $donors->values())->backgroundColor('green'); 
        return view('Donors.graph', compact('chart', 'charts'));
         //return view('Donors.graph', compact('chart'));
    }

}
