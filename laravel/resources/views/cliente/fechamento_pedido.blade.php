@extends('layouts.main')

@section('content')
<div class="container shadow-border" style="padding: 50px; background-color: white; border-radius: 5px; text-align:center">
    <h2 class="h2" style="color:white">Selecione o Endereço de Entrega</h2>
    <br>
    <a href="/fechamento_pagamento.html" class="btn btn-danger btn-lg ms-2 mb-4">Adicionar novo endereço</a>
    <div class="d-flex justify-content-around flex-wrap border rounded-top pt-4 px-3" style="background-color:white">
    @foreach($enderecos as $endereco)
        <div class="mb-4 mx-2 flex-even">
            <input type="radio" class="btn-check" name="endereco" 
                autocomplete="off" id="{{Endereco->id}}">
            <label class="btn btn-outline-danger p-4 h-100 w-100" for="end1">
                <span>
                    <b class="text-dark">{{$endereco->apelido}}</b><br>
                    <hr>
                    <b>{{session('user')->nome}}</b><br>
                    {{$endereco->rua}} -{{$endereco->numero}},{{$endereco->bairro}}<br>
                    {{$endereco->cidade}}/{{$endereco->estado}}<br>
                    CEP {{$endereco->cep}}
                </span>
            </label>
        </div>
    @endforeach
    </div>
    <br>
    <h2 class="h2" style="color:white">Selecione a Forma de Pagamento</h2>
    <br>
    <a href="/fechamento_pagamento.html" class="btn btn-danger btn-lg ms-2 mb-4">Adicionar novo cartão</a>
    <div class="d-flex justify-content-around flex-wrap border rounded-top pt-4 px-3" >
        <div class="mb-4 mx-2 flex-even col-md-4">
            <input type="radio" class="btn-check" name="pagamento" autocomplete="off" id="pag1" value="dinheiro">
            <label class="btn btn-outline-danger p-4 h-100 w-100" for="pag1">
                <h3>
                    <b class="text-dark">Dinheiro</b>
                </h3>
                <hr>
                <h4>Valor da Compra: <br><b>R$ {{session('carrinho')->valortotal}}</b></h4>
                <br>
                <p>
                    Se precisar de troco, informe no campo abaixo.
                </p>
                <div class="form-floating mb-6">
                    <input type="number" id="txtTroco" name="troco" class="form-control" placeholder=" ">
                    <label for="txtTroco" class="text-black-50">Precisa de troco para quanto?</label>
                </div>
            </label>
        </div>
        <div class="mb-4 mx-2 flex-even col-md-4">
            <input type="radio" class="btn-check" name="pagamento" autocomplete="off" id="pag2" value="pix">
            <label class="btn btn-outline-danger p-4 h-100 w-100" for="pag2">
                <h3>
                    <b class="text-dark">Pix</b>
                </h3>
                <hr>
                <h4>Telefone: <b>24999911641</b></h4>
                <span>Por favor enviar o comprovante para o telefone da chave PIX e mostrar o comprovante para o entregador</span>
            </label>
        </div>
        <div class="mb-4 mx-2 flex-even col-md-4">
            <input type="radio" class="btn-check" autocomplete="off">
            <label class="btn btn-outline-danger p-4 h-100 w-100">
                <h3>
                    <b class="text-dark">Cartão de Crédito</b>
                </h3>
                <hr>
                @foreach($cartoes as $cartao)
                <div class="mb-4 mx-2 flex-even">
                    <input type="radio" class="btn-check" name="pagamento" value="{{$cartao->id}}"
                        autocomplete="off" id="cartao1">
                    <label class="btn btn-outline-danger p-4 h-100 w-100" for="cartao1">
                        <span>
                            <b class="text-dark">Loja</b><br>
                            <hr>
                            <b>{{$cartao->apelido}}</b><br>
                            
                        </span>
                    </label>
                </div>
                @endforeach
                
            </label>
        </div>     
    </div>
    <br>
    <h2 class="h2" style="color: white">Itens</h2>
    <ul class="list-group mb-3"> 
        <div class="row g-3">
        @foreach($produtos as $produto)
            <div class="col-md-6">
                <li class="list-group-item py-3">
                    <div class="row">
                        <div class="col-4 col-md-3 col-lg-2">

                                <img src="{{asset('/storage/img/produtos/'.$produto->imagem)}}"  class="card-img-top">
                        </div>
                        <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-center">
                            <h4 class="text-danger">{{$produto->nome}}</a></b></h4>
                            <h5>
                                <b>
                                    {{$produto->quantidade}} unidade(s) <br>
                                    R$ {{$produto->valorproduto}}
                                </b>
                            </h5>
                        </div>
                    </div>
                </li>
            </div>
            @endforeach
            <div class="text-center">
                <li class="list-group-item py-3">
                    <h4 class="text-dark" style="text-align: center">Valor Total: R$ {{session('carrinho')->valortotal}}</h4>
                </li>
                <br>
                <a class="btn btn-lg btn-light btn-outline-danger" href="{{route('carrinho-index')}}">Voltar ao carrinho</a>
                <input type="submit" value="Finalizar Compra" class="btn btn-lg btn-light btn-outline-danger"/>
            </div>
        </div>
    </ul>
    <br>
</div>


@endsection