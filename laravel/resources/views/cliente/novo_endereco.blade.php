@extends('layouts.main_login')

@section('title','Bem Doces | Novo Endereco')

@section('content')

<div class="container">
    <h1>Novo Endereço</h1>
    <hr>
    <form class="mt-3" action="{{route('cadastrar')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <fieldset class="row gx-3">
                    <div class="form-floating mb-3">
                        <input class="form-control border" type="text" name="nome" id="txtNome" value="{{old('nome')}}" placeholder=" "autofocus/>
                        <label for="txtNome">Rua</label>
                    </div>
                </fieldset>
            </div>
            <div class="col-sm-12 col-md-6">
                <fieldset class="row gx-3">
                    <div class="form-floating mb-3 col-md-6">
                        <input class="form-control border" type="email" name="email" value="{{old('email')}}" id="txtEmail" placeholder=" " />
                        <label for="txtEmail">CEP</label>
                    </div>
                    <div class="form-floating mb-3 col-md-6">
                        <input class="form-control border" placeholder=" " name="telefone" value="{{old('telefone')}}" minlength="11" maxlength="11" type="text" id="txtTelefone" />
                        <label for="txtTelefone">Número</label>
                    </div>
                </fieldset>
            <br>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-floating mb-3">
                            <input class="form-control border" type="password" name="senha" value="{{old('senha')}}" id="txtSenha" placeholder=" " />
                            <label for="txtSenha">Bairro</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating mb-3">
                            <input class="form-control border" type="password" name="confirma_senha" value="{{old('confirma_senha')}}" id="txtConfirmacaoSenha" placeholder=" " />
                            <label class="form-label" for="txtConfirmacaoSenha">Cidade</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="btn btn-lg btn-light btn-outline-danger" href="endereco">Cancelar</a>
        <input type="submit" value="Cadastrar" class="btn btn-lg btn-light btn-outline-danger"/>
        <br><br>
    </form>
</div>
@endsection
