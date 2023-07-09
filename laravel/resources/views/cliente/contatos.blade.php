@extends('layouts.main')

@section('title', 'Bem Doces | Contatos')

@section('content')
    <div class="container">
        <h2>Nome do Cliente</h2>
        <div class="row gx-3">
            <div class="col-4">
                <div class="list-group">
                    <a href="contatos" class="list-group-item list-group-item-action bg-danger text-light">
                        <i class="bi-mailbox fs-6"></i> Contatos
                    </a>
                    <a href="endereco" class="list-group-item list-group-item-action">
                        <i class="bi-house-door fs-6"></i> Endereço
                    </a>
                    <a href="pedidos" class="list-group-item list-group-item-action">
                        <i class="bi-truck fs-6"></i> Pedidos
                    </a>
                    <a href="cartao" class="list-group-item list-group-item-action">
                        <i class="bi bi-card-list"></i> Cartão
                    </a>
                    <a href="/" class="list-group-item list-group-item-action">
                        <i class="bi-door-open fs-6"></i> Sair
                    </a>
                </div>
            </div>
            <div class="col-8">
                <form action="">
                    <div class="form-floating mb-3 col-md-8">
                        <input class="form-control" type="email" id="txtEmail" placeholder=" " autofocus/>
                        <label for="txtEmail">E-mail</label>
                    </div>
                    <div class="form-floating mb-3 col-md-8">
                        <input class="form-control" type="text" id="txtTelefone" placeholder=" " />
                        <label for="txtTelefone">Telefone</label>
                    </div> 
                    <button type="button" class="btn btn-danger">Salvar alterações</button>                           
                </form>
            </div>
        </div>
    </div>
    <br>
@endsection


        