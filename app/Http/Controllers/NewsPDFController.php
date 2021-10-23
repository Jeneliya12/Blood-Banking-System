<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

class NewsPDFController extends Controller
{
    function index()
    {
     $news = $this->getnews_data();
     return view('admin.news-register')->with('news', $news);
    }

    function get_news_data()
    {
     $news = DB::table('news')
         ->limit(10)
         ->get();
     return $news;
    }

    function pdf()
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_news_data_to_html());
     return $pdf->stream();
    }

    function convert_news_data_to_html()
    {
     $news = $this->get_news_data();
     $output = '
     <h3 align="center">News Data</h3>
     <table width="100%" style="border-collapse: collapse; border:0px;">
      <tr>
    <th style="border: 1px solid;">Title</th>
    <th style="border: 1px solid;">Description</th>
    <th style="border: 1px solid;">Short Description</th>
    <th style="border: 1px solid;">Category</th>
    <th style="border: 1px solid;">Date</th>
 
   </tr>
     ';  
     foreach($news as $news)
     {
      $output .= '
      <tr>
        <td style="border: 1px solid; padding:10px;">'.$news->title.'</td>
        <td style="border: 1px solid; padding:10px;">'.$news->description.'</td>
        <td style="border: 1px solid; padding:10px;">'.$news->shortdescription.'</td>
        <td style="border: 1px solid; padding:10px;">'.$news->category.'</td>
        <td style="border: 1px solid; padding:10px;">'.$news->date.'</td>
      </tr>
      ';
     }
     $output .= '</table>';
     return $output;
    }  
}
