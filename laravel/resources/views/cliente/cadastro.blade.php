@extends('layouts.main')

@section('title','Bem Doces | Cadastro')

@section('content')
<div class="container">
    <h1>Realize seu cadastro</h1>
    <hr>
    <form class="mt-3">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <fieldset class="row gx-3">
                    <legend>Dados Pessoais</legend>
                    <div class="form-floating mb-3">
                        <input class="form-control" type="text" id="txtNome" placeholder=" "autofocus/>
                        <label for="txtNome">Nome</label>
                    </div>
                    <div class="form-floating mb-3 col-md-6 ">
                        <input class="form-control" type="text" id="txtCPF" placeholder=" "/>
                        <label for="txtCPF">CPF</label>
                    </div>
                    <div class="form-floating mb-3 col-md-6">
                        <input class="form-control" type="date" id="txtDataNascimento" placeholder=" " />
                        <label for="txtDataNascimento" class="d-inline d-sm-none d-md-inline d-lg-none">Data
                            Nascimento</label>
                        <label for="txtDataNascimento" class="d-none d-sm-inline d-md-none d-lg-inline">Data
                            de Nascimento</label>
                    </div>
                </fieldset>
            </div>
            <div class="col-sm-12 col-md-6">
                <fieldset>
                    <legend>Contatos</legend>
                    <div class="form-floating mb-3 col-md-8">
                        <input class="form-control" type="email" id="txtEmail" placeholder=" " />
                        <label for="txtEmail">E-mail</label>
                    </div>
                    <div class="form-floating mb-3 col-md-8">
                        <input class="form-control" placeholder=" " type="text" id="txtTelefone" />
                        <label for="txtTelefone">Telefone</label>
                    </div>
                </fieldset>
            </div>
        </div>
        <hr/>
        <div class="mb-3 text-left">
            <a class="btn btn-lg btn-light btn-outline-danger" href="/">Cancelar</a>
            <input type="button" value="Cadastrar" class="btn btn-lg btn-danger"
                onclick="window.location.href='/cliente/cadastro_confirmado'"/>
        </div>
    </form>
</div>
@endsection
