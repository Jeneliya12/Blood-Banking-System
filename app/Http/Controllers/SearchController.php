<?php
namespace App\Http\Controllers;

use App\Donor;
use App\Http\Controllers;
use Illuminate\Http\Request;


class SearchController extends Controller
{
    public function index(Request $request)
    {
       $q= Request::get('q');
        if($q != ""){
            $donors= Donor::where('name', 'LIKE', '%' . $q . '%')
            ->orWhere('blood', 'LIKE', '%' . $q . '%')
            ->orWhere('city', 'LIKE', '%' . $q . '%')
            ->orWhere('country', 'LIKE', '%' . $q . '%')
            ->get();
            if (count($donors)>0)
                return view ('searchcontent')->withDetails($donors)->withQuery($q);
        }
        return view("searchcontent")->withMessage("No Donors found");
        }
   
}
