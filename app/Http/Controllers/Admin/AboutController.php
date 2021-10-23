<?php
namespace App\Http\Controllers\Admin;

use App\Abouts;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $about= Abouts::get();
        return view('about', compact('about'));
    }

    public function registered()
    {
        $about= Abouts::all();

        return view('admin.about-register')->with('about', $about);
    }  
    public function store(Request $request)
    {
        $about=new abouts;

        $about->img=$request->input('img');
        $about->title=$request->input('title');
        $about->subtitle=$request->input('subtitle');
        $about->description=$request->input('description');

        $about->save();
        Session::flash('statuscode','success');
        return redirect('/about-register')->with('status', 'About Pages Added Sucessfully');
    }

    public function show(Request $request, $id)
        {
            $about= Abouts::findOrFail($id);
            return view('about')->with('about', $about);
        }

    public function registeredit(Request $request, $id)
    {
        $about= Abouts::findOrFail($id);

        Session::flash('statuscode','success');
        return view('admin.about-edit')->with('about', $about);
    }
    
    public function registerupdate(Request $request, $id)
    {
        $about= Abouts::find($id);

        $about->img=$request->input('img');
        $about->title=$request->input('title');
        $about->subtitle=$request->input('subtitle');
        $about->description=$request->input('description');
        $about->update();

        Session::flash('statuscode','success');
        return redirect('/about-register')->with('status', 'Your Data is Updated');
    }
    
    public function registerdelete(Request $request, $id)
    {
        $about= Abouts::findOrFail($id);
        $about->delete();

        Session::flash('statuscode','error');
        return redirect('/about-register')->with('status', 'Your Data is Deleted');
    }
}
