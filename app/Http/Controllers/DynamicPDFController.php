<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

class DynamicPDFController extends Controller
{
    function index()
    {
     $donors = $this->get_donor_data();
     return view('admin.donor-register')->with('donors', $donors);
    }

    function get_donor_data()
    {
     $donors = DB::table('donors')
         ->limit(10)
         ->get();
     return $donors;
    }

    function pdf()
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_donor_data_to_html());
     return $pdf->stream();
    }

    function convert_donor_data_to_html()
    {
     $donors = $this->get_donor_data();
     $output = '
     <h3 align="center">Donor Data</h3>
     <table width="100%" style="border-collapse: collapse; border:0px;">
      <tr>
    <th style="border: 1px solid;">Name</th>
    <th style="border: 1px solid;">Email</th>
    <th style="border: 1px solid;">Number</th>
    <th style="border: 1px solid;">Address</th>
    <th style="border: 1px solid;">Blood Group</th>
    <th style="border: 1px solid;">Age</th>
    <th style="border: 1px solid;">Date</th>
   </tr>
     ';  
     foreach($donors as $donor)
     {
      $output .= '
      <tr>
        <td style="border: 1px solid; padding:10px;">'.$donor->name.'</td>
        <td style="border: 1px solid; padding:10px;">'.$donor->email.'</td>
        <td style="border: 1px solid; padding:10px;">'.$donor->number.'</td>
        <td style="border: 1px solid; padding:10px;">'.$donor->address.'</td>
        <td style="border: 1px solid; padding:10px;">'.$donor->blood.'</td>
        <td style="border: 1px solid; padding:10px;">'.$donor->age.'</td>
        <td style="border: 1px solid; padding:10px;">'.$donor->date.'</td>
      </tr>
      ';
     }
     $output .= '</table>';
     return $output;
    }
}
