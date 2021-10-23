<?php
namespace App\Http\Controllers\Admin;

use App\Employ;
use App\Donor;
use App\Modules\Event\Event;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DonorsListController extends Controller
{
 	public function registered()
 	{
 		$donors= Donor::all();

 		return view('admin.donor-register')->with('donors', $donors);
 	}  
 	public function store(Request $request)
    {
    	$donors=new Donor;

    	$donors->name=$request->input('name');
 		$donors->email=$request->input('email');
 		$donors->number=$request->input('number');
 		$donors->img=$request->input('img');
 		$donors->address=$request->input('address');
        $donors->country=$request->input('country');
        $donors->city=$request->input('city');
 		$donors->blood=$request->input('blood');
        $donors->status=$request->input('status');
        $donors->date=$request->input('date');
 		$donors->profession=$request->input('profession');
        $donors->education=$request->input('education');
        $donors->birth=$request->input('birth');
        $donors->age=$request->input('age');
        $donors->gender=$request->input('gender');
        $donors->religion=$request->input('religion');
 		
    	$donors->save();

        Session::flash('statuscode','success');
    	return redirect('/donor-register')->with('status', 'Donors Added Sucessfully');
    }

	public function show(Donor $donor, $id)
	    {
	        $donors= Donor::findOrFail($id);
	        return view('Donors.show')->with('donors', $donors);
	    }

 	public function registeredit(Request $request, $id)
 	{
 		$donors= Donor::findOrFail($id);

 		Session::flash('statuscode','success');
 		return view('admin.donor-edit')->with('donors', $donors);
 	}
 	
 	public function registerupdate(Request $request, $id)
 	{
 		$donors= Donor::find($id);
 		$donors->name=$request->input('name');
 		$donors->email=$request->input('email');
 		$donors->number=$request->input('number');
 		$donors->img=$request->input('img');
 		$donors->address=$request->input('address');
        $donors->country=$request->input('country');
        $donors->city=$request->input('city');
 		$donors->status=$request->input('status');
 		$donors->date=$request->input('date');
 		$donors->update();

 		Session::flash('statuscode','success');
 		return redirect('/donor-register')->with('status', 'Your Data is Updated');
 	}
 	
 	public function registerdelete(Request $request, $id)
 	{
 		$donors= Donor::findOrFail($id);
 		$donors->delete();

 		Session::flash('statuscode','error');
 		return redirect('/donor-register')->with('status', 'Your Data is Deleted');
 	}

    public function reserve(Request $request, $id)
    {
        $donors= Donor::findOrFail($id);

        Session::flash('statuscode','success');
        return view('/reserve')->with('donors', $donors);
    }

    public function booking()
    {
        $donors= Donor::all();
        return view('admin.bloodreservation')->with('donors', $donors);
    }

     public function bookingcancel()
    {
        $donors= Donor::all();
        return view('/bookingcancel')->with('donors', $donors);
    }

    public function charts(){
        $donors= Donor::all();
        return view('admin.dashboard')->with('donors', $donors);  
    }
}
