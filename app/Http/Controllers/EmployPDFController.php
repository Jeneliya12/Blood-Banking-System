<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

class EmployPDFController extends Controller
{
  function index()
    {
     $employ = $this->get_employ_data();
     return view('admin.employ-register')->with('employ', $employ);
    }

    function get_employ_data()
    {
     $employ = DB::table('employs')
         ->limit(10)
         ->get();
     return $employ;
    }

    function pdf()
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_employ_data_to_html());
     return $pdf->stream();
    }

    function convert_employ_data_to_html()
    {
     $employ = $this->get_employ_data();
     $output = '
     <h3 align="center">Employee Data</h3>
     <table width="100%" style="border-collapse: collapse; border:0px;">
      <tr>
    <th style="border: 1px solid;">Name</th>
    <th style="border: 1px solid;">Email</th>
    <th style="border: 1px solid;">Number</th>
    <th style="border: 1px solid;">Address</th>
    <th style="border: 1px solid;">Country</th>
    <th style="border: 1px solid;">Designation</th>
    <th style="border: 1px solid;">Organization</th>
   </tr>
     ';  
     foreach($employ as $employ)
     {
      $output .= '
      <tr>
        <td style="border: 1px solid; padding:10px;">'.$employ->name.'</td>
        <td style="border: 1px solid; padding:10px;">'.$employ->email.'</td>
        <td style="border: 1px solid; padding:10px;">'.$employ->number.'</td>
        <td style="border: 1px solid; padding:10px;">'.$employ->address.'</td>
        <td style="border: 1px solid; padding:10px;">'.$employ->country.'</td>
      	<td style="border: 1px solid; padding:10px;">'.$employ->designation.'</td>
      	<td style="border: 1px solid; padding:10px;">'.$employ->organization.'</td>
      </tr>
      ';
     }
     $output .= '</table>';
     return $output;
    }  
}
