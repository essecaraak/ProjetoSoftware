<?php

namespace App\Http\Controllers;

use App\Http\Requests\produtorequest;
use App\Models\produto;
use Illuminate\Http\Request;

class produtoscontroller extends Controller
{
    public function produtos_create(Request $request){

        dd($request->all());
       
    }
}
