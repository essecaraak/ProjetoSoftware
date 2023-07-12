@extends('layouts.main')

@section('title','Bem Doces')

@section('title', 'Bem Doces')

@section('content')
<div class="container">

    <div class="row g-3">
        @foreach($produtos as $produto)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column">
                <div class="card text-center bg-light d-flex flex-column" style="flex-grow: 1;">
                    <a href="#" class="position-absolute end-0 p-2 text-danger">
                        <i class="bi-suit-heart" style="font-size: 24px; line-height: 24px;"></i>
                    </a>
                    <a href="{{route('visualizar-produto',[$produto->id])}}">
                        <img src="{{asset('/storage/img/produtos/'.$produto->imagem)}}" class="card-img-top">
                    </a>
                    <div class="card-header">
                        R$ {{$produto->valor}}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$produto->nome}}</h5>
                    </div>
                    <div class="card-footer">
                        <small class="text-success">
                            @if($produto->quantidade==1)
                                {{$produto->quantidade_carrinho}} unidade no carrinho
                            @else
                                {{$produto->quantidade_carrinho}} unidades no carrinho
                            @endif
                        </small>
                    </div>
                </div>
            </div>
        @endforeach

    <hr class="mt-3">

    
</div>
@endsection
