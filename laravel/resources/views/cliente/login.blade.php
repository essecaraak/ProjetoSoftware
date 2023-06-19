@extends('layouts.main')

@section('title', 'Bem Doces')

@section('content')
<main class="flex-fill">
    <div class="container">
        <div class="row justify-content-center">
            <form class="col-sm-10 col-md-8 col-lg-6">
                <h1>Área de Login</h1>

                <div class="form-floating mb-3">
                    <input type="email" id="txtEmail" class="form-control" placeholder=" " autofocus>
                    <label for="txtEmail">E-mail</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" id="txtSenha" class="form-control" placeholder=" ">
                    <label for="txtSenha">Senha</label>
                </div>

                <button type="button" onclick="window.location.href='#'"
                    class="btn btn-lg btn-danger">Entrar</button>

                <p class="mt-3">
                    Ainda não é cadastrado? <a href="/cadastro.html">Clique aqui</a> para se cadastrar.
                </p>

                <p class="mt-3">
                    Esqueceu sua senha? <a href="/recuperarsenha.html">Clique aqui</a> para recuperá-la.
                </p>
            </form>
        </div>
    </div>
</main>
@endsection

        