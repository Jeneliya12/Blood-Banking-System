<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function message(Request $request){

    	$message= $request->input('message');
    	$phone= $request->input('phone');
    	$encodeMessage=urlencode($message);
    	$authkey='';
    	$senderId='';
    	$route=4;
    	$postData=$request->all();

    	$mobileNumber= implode('', $postData['phone']);
    	$arr= str_split($mobileNumber, '13');
    	$mobiles=implode(",", $arr);
    	// print_r($mobiles);
    	// exit();
		$data=array(
			'authkey'=>$authkey,
			'mobiles'=>$mobiles,
			'message'=>$encodeMessage,
			'sender'=>$senderId,
			'route'=>$route,
		);
		$url="";//path to where you need to send the request this path provided by message gateway provider
		$ch=curl_init();
		curl_setopt_array($ch, array(
			CURLOPT_URL=>$url,
			CURLOPT_RETURNTRANSFER=>true,
			CURLOPT_POSTFIELDS=>$postData

		));
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

		$output=curl_exec($ch);

		if(curl_errno($ch)){
			echo 'error:' .curl_error($ch);
		}
		curl_close($ch);
		return redirect('/login')->with('response', 'Message Sent Successfully');
		

    }
}
