@extends('layouts.main')

@section('title','Bem Doces | Cadastro')

@section('content')

<div class="container">
    @if($errors->any())
        @foreach($errors->all() as $error)
            <h1>{{$error}}</h1>
        @endforeach
    @endif
    <h1>Informe seus dados, por favor</h1>
    <hr>
    <form class="mt-3" action="{{route('cadastrar')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <fieldset class="row gx-3">
                    <legend>Dados Pessoais</legend>
                    <div class="form-floating mb-3">
                        <input class="form-control" type="text" name="nome" id="txtNome" value="{{old('nome')}}" placeholder=" "autofocus/>
                        <label for="txtNome">Nome</label>
                    </div>
                    <div class="form-floating mb-3 col-md-6 col-xl-4">
                        <input class="form-control" type="text" id="txtCPF" placeholder=" "/>
                        <label for="txtCPF">CPF</label>
                    </div>
                    <div class="form-floating mb-3 col-md-6 col-xl-4">
                        <input class="form-control" type="date" id="txtDataNascimento" placeholder=" " />
                        <label for="txtDataNascimento" class="d-inline d-sm-none d-md-inline d-lg-none">Data
                            Nascimento</label>
                        <label for="txtDataNascimento" class="d-none d-sm-inline d-md-none d-lg-inline">Data
                            de Nascimento</label>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Contatos</legend>
                    <div class="form-floating mb-3 col-md-8">
                        <input class="form-control" type="email" name="email" value="{{old('email')}}" id="txtEmail" placeholder=" " />
                        <label for="txtEmail">E-mail</label>
                    </div>
                    <div class="form-floating mb-3 col-md-6">
                        <input class="form-control" placeholder=" " name="telefone" value="{{old('telefone')}}" minlength="11" maxlength="11" type="text" id="txtTelefone" />
                        <label for="txtTelefone">Telefone</label>
                    </div>
                </fieldset>
            </div>
            <div class="col-sm-12 col-md-6">
                <fieldset class="row gx-3">
                    <legend>Endereço</legend>
                    <div class="form-floating mb-3 col-md-6 col-lg-4">
                        <input class="form-control" type="text" id="txtCEP" placeholder=" " />
                        <label for="txtCEP">CEP</label>
                    </div>
                    <div class="form-floating mb-3 col-md-8">
                        <input class="form-control" type="text" id="txtCEP" placeholder=" " />
                        <label for="txtRua">Rua</label>
                    </div>
    
                    <div class="clearfix"></div>
                    <div class="form-floating mb-3 col-md-4">
                        <input class="form-control" type="text"  id="txtNumero" placeholder=" " />
                        <label for="txtNumero">Número</label>
                    </div>
                    <div class="form-floating mb-3 col-md-8">
                        <input class="form-control" type="text" id="txtComplemento" placeholder=" " />
                        <label for="txtComplemento">Complemento</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" type="text" id="txtReferencia" placeholder=" " />
                        <label for="txtReferencia">Referência</label>
                    </div>
                </fieldset>
                <fieldset class="row gx-3">
                    <legend>Senha de Acesso</legend>
                    <div class="form-floating mb-3 col-lg-6">
                        <input class="form-control" type="password" name="senha" value="{{old('senha')}}" id="txtSenha" placeholder=" " />
                        <label for="txtSenha">Senha</label>
                    </div>
                    <div class="form-floating mb-3 col-lg-6">
                        <input class="form-control" id="txtConfirmacaoSenha" type="password" value="{{old('confirmação de senha')}}" name="confirmação de senha" placeholder=" " />
                        <label class="form-label" for="txtConfirmacaoSenha">Confirmação da Senha</label>
                    </div>
                </fieldset>
            </div>
        </div>
        <hr/>
        <div class="mb-3 text-left">
            <a class="btn btn-lg btn-light btn-outline-danger" href="/">Cancelar</a>
            <input type="submit" value="Cadastrar" class="btn btn-lg btn-danger"/>
        </div>
    </form>
</div>
@endsection
