<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use  Webpatser\Uuid\Uuid;

class uuidController extends Controller
{
    public function index(){
    	print_r(Uuid::generate()->bytes);
    }
}
