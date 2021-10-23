<?php

namespace App\Http\Controllers;
use App\Donor;
use Illuminate\Http\Request;


class DonorsController extends Controller
{


    public function index(Request $request)
    {
    $donor= Donor::all();
     return view ('Donors.index', compact('donor'));
    }

    public function create(Donor $donor)
    {
        return view ('Donors.create');
    }

    public function store()
    {
        $validated= request()->validate([
        'name'=> ['required', 'min:3'],
        'email'=>'email|required|max:255','unique:donors',
        'number'=>['required', 'min:6'],
        'img'=>['required', 'min:3'],
        'address'=>['required', 'min:5'],
        'country'=>['required'],
        'city'=>['required'],
        'blood'=>['required', 'min:1'],
        'date'=>'required',
        'profession'=>['required'],
        'education'=>['required'],
        'birth'=>['required'],
        'age'=>['required'],
        'gender'=>['required'],
        'religion'=>['required'],
        'description'=>['required'],
         ],
         [
            'date.required'=>'Please enter date',
         ]);
        $donor= Donor::create($validated);
        return redirect ('/donors');
    }

    public function show(Donor $donor)
    {
        return view('Donors.show')->with('donor', $donor);
    }
    
    public function edit(Donor $donor)
    {
        return view('Donors.edit', compact('donor'));
    }

    public function update(Donor $donor)
    { 
        $donor->update(request(['name', 'email', 'number', 'img', 'address', 'country', 'city', 'blood', 'date', 'profession', 'education', 'birth', 'age', 'religion', 'description']));
        return redirect ('/donors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donor $donor)
    {
        $donor->delete();
        return redirect('/donors');
    }
}
