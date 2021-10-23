<?php
namespace App\Http\Controllers\Admin;

use App\User;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
 	public function registered()
 	{
 		$users= User::all();

 		return view('admin.register')->with('users', $users);
 	}  

 	public function registeredit(Request $request, $id)
 	{
 		$users= User::findOrFail($id);
 		
 		Session::flash('statuscode','success');
 		return view('admin.register-edit')->with('users', $users);
 	}
 	
 	public function registerupdate(Request $request, $id)
 	{
 		$users= User::find($id);
 		$users->name=$request->input('username');
 		$users->usertype=$request->input('usertype');
 		$users->update();

 		Session::flash('statuscode','success');
 		return redirect('/role-register')->with('status', 'Your Data is Updated');
 	}
 	
 	public function registerdelete(Request $request, $id)
 	{
 		$users= User::findOrFail($id);
 		$users->delete();

 		Session::flash('statuscode','error');
 		return redirect('/role-register')->with('status', 'Your Data is Deleted');
 	}

 	public function changestatus($id){
 		$users= User::find($id);
 		$users->is_active=!$users->is_active;
 		if ($users->save()){
 			return redirect('/role-register');
 		}
  		else
 		{
 			return redirect(route('changestatus'));
 		}
 		

 	}

}
