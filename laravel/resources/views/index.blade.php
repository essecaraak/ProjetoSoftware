@extends('layouts.main')

@section('title','Bem Doces')

@section('title', 'Bem Doces')

@section('header')
<div class="container">
    <div id="carouselMain" class="carousel slide carousel-dark" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <img src="/img/slides/slide01.jpg" class="d-none d-md-block w-100" alt="">
                <img src="/img/slides/slide01small.jpg" class="d-block d-md-none  w-100" alt="">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="/img/slides/slide01.jpg" class="d-none d-md-block w-100" alt="">
                <img src="/img/slides/slide01small.jpg" class="d-block d-md-none  w-100" alt="">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="/img/slides/slide01.jpg" class="d-none d-md-block w-100" alt="">
                <img src="/img/slides/slide01small.jpg" class="d-block d-md-none  w-100" alt="">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselMain" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselMain" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>
    <hr class="mt-3">
</div>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-5">
            <form class="justify-content-center justify-content-md-start mb-3 mb-md-0">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" placeholder="Digite aqui o que procura">
                    <button class="btn btn-danger">Buscar</button>
                </div>
            </form>
        </div>
        <div class="col-12 col-md-7">
            <div class="d-flex flex-row-reverse justify-content-center justify-content-md-start">
                <form class="d-inline-block">
                    <select class="form-select form-select-sm">
                        <option>Ordenar pelo nome</option>
                        <option>Ordenar pelo menor preço</option>
                        <option>Ordenar pelo maior preço</option>
                    </select>
                </form>
                
            </div>
        </div>
    </div>

    <hr mt-3>

    <div class="row g-3">
        @foreach($produtos as $produto)
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column">
            <div class="card text-center bg-light d-flex flex-column" style="flex-grow: 1;">
                <a href="#" class="position-absolute end-0 p-2 text-danger">
                    <i class="bi-suit-heart" style="font-size: 24px; line-height: 24px;"></i>
                </a>
                <a href="/produto.html">
                    <img src="{{asset('/storage/img/produtos/'.$produto->imagem)}}" class="card-img-top">
                </a>
                <div class="card-header">
                    R$ {{$produto->valor}}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$produto->nome}}</h5>
                </div>
                <div class="card-footer">
                    @if($produto->quantidade==0)
                    <a href="#" class="btn btn-light disabled mt-2 d-block">
                        <small>Reabastecendo Estoque</small>
                    </a>
                    <small class="text-danger">
                        <b>Produto Esgotado</b>
                    </small>
                    @else
                    <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                        Adicionar ao Carrinho
                    </a>
                    <small class="text-success">
                        {{$produto->quantidade}} unidades em estoque
                    </small>
                    @endif
                </div>
            </div>
        </div>
        @endforeach


    <hr class="mt-3">

    
</div>
@endsection
