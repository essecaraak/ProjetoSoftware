@extends('layouts.main')

@section('title', 'Bem Doces | Produto')

@section('content')
    <div class="container">
    <h1>{{$produto->nome}}</h1>
    <hr>
    <form class="mt-3" enctype="multipart/form-data" action="{{route('carrinho-produto-insert', [$produto->id])}}" method="post">
        @csrf
        <div class="row">
        <div class="col-sm-4 d-flex justify-content-center">
            <img style="width:300px; height:300px;" src="{{asset('/storage/img/produtos/'.$produto->imagem)}}" class="form-control text-center"></img>
        </div>
        <div class="col-sm-8">
            <div class="form-floating">
            Descrição
            <span style="height: 150px;" class="form-control" id="descricao" name="descricao" placeholder=" "> {{$produto->descricao}}</span>
            </div>
            <br>
            <div class="row">
            <div class="col-md-4">
                <div class="form-floating mb-3">
                Quantidade: 
                <input class="form-control border" type="number" value="{{$produto->quantidade}}" name="quantidade" placeholder=" " />
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-3">
                Preço: 
                <span class="form-control border text-center" id="preco" name="quantidade" placeholder=" ">R$ {{$produto->valor}}</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-3">
                Tipo:
                <span class="form-control border text-center" name="quantidade" placeholder=" "> {{$produto->tipo}}</span>
                </div>
            </div>
            </div>
        </div>
        </div>
        <br>
            <a class="btn btn-lg btn-light btn-outline-danger" href="{{route('index')}}">Voltar</a>
            <input type="submit" value="Adicionar ao Carrinho" class="btn btn-lg btn-light btn-outline-danger espacamento" />
        <br><br>
    </form>
    </div>
    <script src="/js/preview_imagem.js"></script>
@endsection