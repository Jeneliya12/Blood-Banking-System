<?php
namespace App\Http\Controllers\Admin;

use App\Employ;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployersController extends Controller
{
 	public function registered()
 	{
 		$employ= Employ::all();

 		return view('admin.employ-register')->with('employ', $employ);
 	}  
 	public function store(Request $request)
    {
    	$employ=new employ;

    	$employ->name=$request->input('name');
 		$employ->email=$request->input('email');
 		$employ->number=$request->input('number');
 		$employ->img=$request->input('img');
 		$employ->address=$request->input('address');
 		$employ->designation=$request->input('designation');
        $employ->organization=$request->input('organization');
 		
    	$employ->save();
        Session::flash('statuscode','success');
    	return redirect('/employ-register')->with('status', 'Employer Added Sucessfully');
    }

	
 	public function registeredit(Request $request, $id)
 	{
 		$employ= Employ::findOrFail($id);

 		Session::flash('statuscode','success');
 		return view('admin.employ-edit')->with('employ', $employ);
 	}
 	
 	public function registerupdate(Request $request, $id)
 	{
 		$employ= Employ::find($id);
 	
        $employ->name=$request->input('name');
        $employ->email=$request->input('email');
        $employ->number=$request->input('number');
        $employ->img=$request->input('img');
        $employ->address=$request->input('address');
        $employ->designation=$request->input('designation');
        $employ->organization=$request->input('organization');
        $employ->update();

 		Session::flash('statuscode','success');
 		return redirect('/employ-register')->with('status', 'Your Data is Updated');
 	}
 	
 	public function registerdelete(Request $request, $id)
 	{
 		$employ= Employ::findOrFail($id);
 		$employ->delete();

 		Session::flash('statuscode','error');
 		return redirect('/employ-register')->with('status', 'Your Data is Deleted');
 	}
}
