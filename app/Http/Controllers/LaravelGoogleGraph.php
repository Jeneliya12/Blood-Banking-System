<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LaravelGoogleGraph extends Controller
{
    function index()
    {
     $data = DB::table('donors')
       ->select(
        DB::raw('blood as blood'),
        DB::raw('count(*) as number'))
       ->groupBy('blood')
       ->get();
     $array[] = ['Blood', 'Number'];
     foreach($data as $key => $value)
     {
      $array[++$key] = [$value->blood, $value->number];
     }
     return view('google_pie_chart')->with('blood', json_encode($array));
    }
}