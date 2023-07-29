@extends('layouts.main')

@section('title', 'Bem Doces | Administrador')

@section('content')
    <div class="container">
        <h1>Área do Administrador</h1>
        <br>
        <div class="row gx-3">
            <div class="col-6">
                <div class="list-group">
                    <div class="d-flex align-items-center">
                        <a href="gerenciar_produtos" class="list-group-item list-group-item-action">
                            <i class="bi bi-cash-stack fs-6"></i> Gerenciar Produtos
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="list-group">
                    <div class="d-flex align-items-center">
                        <a href="gerenciar_feed" class="list-group-item list-group-item-action text-light" style="background-color: rgb(146, 129, 248)">
                            <i class="bi-mailbox fs-6"></i> Gerenciar Feed Notícias
                        </a>
                    </div>
                </div>
            </div>  
        </div>
    </div>
@endsection