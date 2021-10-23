<?php

namespace App\Http\Controllers\Employers;

use App\Employ;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployerPagesController extends Controller
{
	public function index(){
 		$employ= Employ::get();
 		return view('Employer.employerpage', compact('employ'));
 	}

	public function show(Employ $employ, $id)
    {
        $employ= Employ::findOrFail($id);
        return view('Employer.show')->with('employ', $employ);
    }
   
}
