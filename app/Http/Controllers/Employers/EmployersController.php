<?php

namespace App\Http\Controllers\Employers;

use App\Employ;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployersController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index(Employ $employ)
    {
    $employ= Employ::all();
     return view ('Employer.index', compact('employ'));
    }

    public function create(Employ $employ)
    {
        return view ('Employer.create');
    }

    /**
     * Store a newly created resource in storage.
     *Donor $donor
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $validated= request()->validate([
        'name'=> ['required', 'min:3'],
        'email'=> 'email|required|max:255','unique:employ',
        'number'=>['required', 'min:6'],
        'img'=>['required'],
        'address'=>['required', 'min:3'],
        'designation'=>['required', 'min:3'],
        'organization'=>['required', 'min:3'],
        'country'=>['required', 'min:3'],
        'description'=>['required', 'min:3'],
        ]);
        
        $employ= Employ::create($validated);
        return redirect ('/employ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Employ $employ)
    {
        return view('Employer.show', compact('employ')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employ $employ)
    {
        return view('Employer.edit', compact('employ'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Employ $employ)
    { 
        $employ->update(request(['name', 'email', 'number', 'img', 'address', 'designation', 'organization']));
        return redirect ('/employ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employ $employ)
    {
        $employ->delete();
        return redirect('/employ');
    }
}
