<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
//use Illuminate\Support\Fascades\Auth;
use Auth;
use Input;
class LoginController extends Controller
{
    use AuthenticatesUsers;

   
    protected function redirectTo(){
        if(Auth::user()->usertype=='admin')
        {
            return ('dashboard');
        }
        else
        {
            return 'login';
        }
    }
     public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
   public function postLogin(Request $request)
   {
    return $request->all();
   
    try{
        $rememberMe=false;
        if(isset($request->remember_me))
            $rememberMe=true;
        if(Sentinel::authenticate($request->all(), $rememberMe)){
            $slug= Sentinel::getUser()->roles()->first()->slug;
            if($slug=='admin')
                return redirect('/login');
            elseif ($slug=='user')
                return redirect('/donors');
        }
        else{
            return redirect()->back()->with(['error'=>'Wrong Credentials.']);
        }
    } catch (ThrottlingException $e){
        $delay= $e->getDelay();
    }
   }
   public function credentials(Request $Request){
    $credentials= $Request->only($this->username(), 'password');
    return array_add($credentials, 'is_active', '1');
   }
}
