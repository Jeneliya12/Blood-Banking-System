<?php
use App\Donor;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AgeChartController extends Controller
{
  public function age()
    {
     $data = DB::table('donors')
       ->select(
        DB::raw('age as age'),
        DB::raw('count(*) as number'))
       ->groupBy('age')
       ->get();
     $array[] = ['Age', 'Number'];
     foreach($data as $key => $value)
     {
      $array[++$key] = [$value->age, $value->number];
     }
     return view('agechart')->with('age', json_encode($array));
    }
  }