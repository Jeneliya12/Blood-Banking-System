<?php
namespace App\Http\Controllers\Admin;

use App\News;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class NewsController extends Controller
{
 	public function registered()
 	{
 		$news= News::all();

 		return view('admin.news-register')->with('news', $news);
 	} 

 	public function store(Request $request)
    {
    	$news=new news;

    	$news->title=$request->input('title');
 		$news->category=$request->input('category');
        $news->shortdescription=$request->input('shortdescription');
 		$news->description=$request->input('description');
 		$news->img=$request->input('img');
 		$news->date=$request->input('date');
 		
    	$news->save();
        Session::flash('statuscode','success');
    	return redirect('/news-register')->with('status', 'News Added Sucessfully');
    }

 	public function registeredit(Request $request, $id)
 	{
 		$news= News::findOrFail($id);

 		Session::flash('statuscode','success');
 		return view('admin.news-edit')->with('news', $news);
 	}
 	
 	public function registerupdate(Request $request, $id)
 	{
 		$news= News::find($id);
 	
        $news->title=$request->input('title');
        $news->category=$request->input('category');
        $news->shortdescription=$request->input('shortdescription');
        $news->description=$request->input('description');
        $news->img=$request->input('img');
        $news->date=$request->input('date');
        $news->update();

 		Session::flash('statuscode','success');
 		return redirect('/news-register')->with('status', 'Your Data is Updated');
 	}
 	
 	public function registerdelete(Request $request, $id)
 	{
 		$news= News::findOrFail($id);
 		$news->delete();

 		Session::flash('statuscode','error');
 		return redirect('/news-register')->with('status', 'Your Data is Deleted');
 	}
}
