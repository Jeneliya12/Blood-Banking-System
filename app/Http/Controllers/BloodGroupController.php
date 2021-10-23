<?php
namespace App\Http\Controllers;
use App\Donor;

use Illuminate\Http\Request;

class BloodGroupController extends Controller
{	
	public function show(Donor $donor, $id)
    {
        $donor= Donor::findOrFail($id);
        return view('sortblood')->with('donor', $donor);
    }  	
}