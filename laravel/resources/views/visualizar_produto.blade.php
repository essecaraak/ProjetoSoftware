@extends('layouts.main')

@section('title', 'Bem Doces | Produto')

@section('content')
    <div class="container">
    <h1>Nome Produto</h1>
    <hr>
    <form class="mt-3" enctype="multipart/form-data" action="{{route('novo-produto-create')}}" method="post">
        @csrf
        <div class="row">
        <div class="col-sm-4 d-flex justify-content-center">
            <img style="width:300px; height:300px;" src="/img/produtos/000001.jpg" class="form-control text-center"></img>
        </div>
        <div class="col-sm-8">
            <div class="form-floating">
            Descrição
            <span style="height: 150px;" class="form-control" id="descricao" name="descricao" placeholder=" "></span>
            </div>
            <br>
            <div class="row">
            <div class="col-md-4">
                <div class="form-floating mb-3">
                Quantidade:
                <select class="form-control text-center" id="quantidade" step="any" name="valor" placeholder=" ">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-3">
                Preço:
                <span class="form-control border text-center" id="preco" name="quantidade" placeholder=" "></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-3">
                Tipo:
                <span class="form-control border text-center" name="quantidade" placeholder=" "></span>
                </div>
            </div>
            </div>
        </div>
        </div>
        <br>
            <a class="btn btn-lg btn-light btn-outline-danger" href="{{route('administrador-index')}}">Voltar</a>
            <input type="submit" value="Adicionar ao Carrinho" class="btn btn-lg btn-light btn-outline-danger espacamento" />
        <br><br>
    </form>
    </div>
    <script src="/js/preview_imagem.js"></script>
@endsection