<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
     public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index(News $news)
    {
    return view ('News.index', compact('news'));
    }

    public function create(News $news)
    {
        return view ('News.create');
    }

    public function show(News $news)
    {
        return view('News.show', compact('news')); 
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
        'title'=> ['required', 'min:3'],
        'category'=> ['required', 'min:5'],
        'img'=>['required'],
        'shortdescription'=>['required'],
        'description'=>['required'],
       	'date'=>['required'],
        ]);
        
        $news= News::create($validated);
        return redirect ('/news');
    }

   
    public function edit(News $news)
    {
        // return view('News.edit', compact('news'));
    }

    public function update(News $news)
    { 
        $news->update(request(['title', 'category', 'img', 'designation', 'date']));
        return redirect ('/news');
    }

    public function destroy(News $news)
    {
        $news->delete();
        return redirect('/news');
    }
}
