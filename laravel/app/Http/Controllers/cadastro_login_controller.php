<?php

namespace App\Http\Controllers;

use App\Http\Requests\cadastrorequest;
use App\Http\Requests\cadastrouser;
use App\Models\User;

use Illuminate\Http\Request;

class cadastro_login_controller extends Controller
{
    public function cadastro(cadastrorequest $request){

        $data = $request->all();
        $data['senha']=bcrypt($request->senha);
       $user = User::create($data);

       return redirect()->route('tela_cadastro')->with("sucesso","usuário cadastrado com sucesso");
       
    }
}
