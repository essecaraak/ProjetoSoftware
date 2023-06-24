<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewscontroller extends Controller
{
    public function tela_cadastro(){
        return view('/cliente/cadastro');
    }

    public function tela_login(){
        return view('/cliente/login');
    }
}
