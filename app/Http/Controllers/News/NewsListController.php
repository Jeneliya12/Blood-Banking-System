<?php

namespace App\Http\Controllers\News;

use App\news;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsListController extends Controller
{
	public function index()
    {
    	$news= News::orderBy('date', 'DESC')->take(10)->get();
 		return view('News.newspages', compact('news'));
    }

    public function show(News $news, $id)
    {
        $news= News::findOrFail($id);
        return view('News.show')->with('news', $news);
    }
}
