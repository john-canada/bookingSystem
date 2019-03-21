<?php

namespace App\Http\Controllers;

use App\events\ordership;
use Illuminate\Http\Request;

class invoice extends Controller
{
    public function addnewProduct(Request $request){
    
        $this->validate([
            'title'=>'required',
            'description'=>'required',
            'price'=>'required'
        ]);
           
      $data=[
          'title'=>$request->input('title'),
          'description'=>$request->input('description'),
          'price'=>$request->input('price')
      ];

        if($data->save()){
          event(new ordership($data));     
        }   

    }
}
