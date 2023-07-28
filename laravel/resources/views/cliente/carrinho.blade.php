@extends('layouts.main')

@section('title','Bem Doces')

@section('title', 'Bem Doces')

@section('content')
    <div class="container">
        <h1>Carrinho de Compras</h1>
        <ul class="list-group mb-3">
            <li class="list-group-item py-3">
                <div class="row g-3">
                    <div class="col-4 col-md-3 col-lg-2">
                        <a href="#">
                            <img src="/img/produtos/000008.jpg" class="img-thumbnail">
                        </a>
                    </div>
                    <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-center">
                        <h4>
                            <b><a href="#" class="text-decoration-none text-danger">
                                    Produto</a></b>
                        </h4>
                        <h5>
                            Descrição do Produto
                        </h5>
                    </div>
                    <div
                        class="col-6 offset-6 col-sm-6 offset-sm-6 col-md-4 offset-md-8 col-lg-3 offset-lg-0 col-xl-2 align-self-center mt-3">
                        <div class="input-group">
                            <input type="text" class="form-control text-center border-dark" value="4">
                            <button class="btn btn-outline-success btn-sm" type="button">
                                <i class="bi bi-bag-check" style="font-size: 16px; line-height: 16px;"></i>
                            </button>
                            <button class="btn btn-outline-danger border-dark btn-sm" type="button">
                                <i class="bi-trash" style="font-size: 16px; line-height: 16px;"></i>
                            </button>
                        </div>
                        <div class="text-end mt-2">
                            <small class="text-secondary">Valor Item: R$ 3,99</small><br>
                            <span class="text-dark">Valor Total: R$ 15,96</span>
                        </div>
                    </div>
                </div>
            </li>
            <li class="list-group-item py-3">
                <div class="text-end">
                    <span class="d-block text-center">Adicionar Cupom: <input><br></span>
                    <h4 class="text-dark mb-3">
                        Valor Total: R$ 63,84
                    </h4>
                    <a href="/index.html" class="btn btn-outline-success btn-lg">
                        Continuar Comprando                            
                    </a>
                    <a href="/fechamento_itens.html" class="btn btn-danger btn-lg ms-2 mt-xs-3">Fechar Compra</a>
                </div>
            </li>
        </ul>
    </div>

@endsection
