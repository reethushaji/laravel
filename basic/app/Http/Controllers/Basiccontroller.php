<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Basiccontroller extends Controller
{
    public function home()
    {
        $data=[
            'name'=>'reethu',
            'message'=>'heyyyyy',
            'names'=>['rose','pooja','aparna'
        ]];
        
        return view('welcome',$data);
        
    }
}
