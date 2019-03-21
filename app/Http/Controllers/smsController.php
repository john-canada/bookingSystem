<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class smsController extends Controller
{
    public function sendsms(Request $request){

    $basic  = new \Nexmo\Client\Credentials\Basic('a2e3d783', 'cx4GSrf7AJtnQpvC');
    $client = new \Nexmo\Client($basic);

    $mobile='639150480717';
    $from = 'canada@gmail.com';
    $message = 'This isitest';

     $api_key='a2e3d783';
     $secrete_key='cx4GSrf7AJtnQpvC';
     $mobile = $mobile;
     $from =  $from;
     $message = $message;
    
      $message = $client->message()->send([
        'api_key'=>$api_key,
        'api_secrete'=>$secrete_key,  
        'to' => $mobile,
        'from' => $from ,
        'text' => $message
      ]);
    if($message){
         dd($message);
    }else{
    echo '<script>  console.log("err") </script>';
    }
    return  $message;
   }

}
