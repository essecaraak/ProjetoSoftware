<?php

namespace App\Http\Controllers;

use App\Http\Requests\cadastrorequest;
use App\Http\Requests\loginrequest;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class cadastro_login_controller extends Controller
{
    public function cadastro(cadastrorequest $request){

        $data = $request->all();
        $data['senha'] = Hash::make($request->senha);
        $user = User::create($data);
        return redirect()->route('tela_cadastro')->with("mensagem_sucesso","usuário cadastrado com sucesso");
       
    }
    public function login(loginrequest $request){
        
        $user = User::where('email',$request->input('email'))->first();

        if(!$user){
            return redirect()->route('tela_login')->with('mensagem_falha','Email incorreto');
        }else if(!password_verify(request()->input('senha'),$user->senha)){
            return redirect()->route('tela_login')->with('mensagem_falha','Senha incorreta');
        }

        Auth::loginUsingId($user->id);
        session()->put('user',$user);

        if($user->usertype =='cliente'){
            return redirect()->route('index');
        }
        if($user->usertype =='administrador'){
            return 'logado como adm';
        }
        if($user->usertype =='atendente'){
            return redirect()->route('atendente_index');
        }
    }

    public function logout(){
        Auth::logout();
        session()->pull('user');
        return redirect()->route('index');

    }
}
