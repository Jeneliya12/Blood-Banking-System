<?php

namespace App\Http\Controllers;

use Request;

class TestController extends Controller
{
    public function testfunction(){

      $name=Request::get('testname');

      if ($name=='laravel') {
        echo "success";

        $notification = array(
                'message' => 'Successfully get laravel data!',
                'alert-type' => 'success'
            );

      } else if ($name=='found') {
        echo "info";

        $notification = array(
                'message' => 'info found data!',
                'alert-type' => 'info'
            );


      } 
      else if ($name=='notfound') {
        echo "warning";
        $notification = array(
                'message' => 'Warning get not found data!',
                'alert-type' => 'warning'
            );

      }else {
        echo "error";
        $notification = array(
                'message' => 'Error! input is empty !',
                'alert-type' => 'error'
            );

      }

      return back()->with($notification);
      
      
    }

}
