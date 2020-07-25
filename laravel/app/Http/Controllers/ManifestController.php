<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manifest;



class ManifestController extends Controller
{
    public function created(Request $request){

        $created=Manifest::create($request->all());

        // login now..
        return $this->login($created);
    }
   

}


