@extends('layouts.main')

@section('title', 'Bem Doces | Pedidos')

@section('content')
    <div class="container">
        <h2>{{session('user')->nome}}</h2>
        <div class="row gx-3">
            <div class="col-4">
                <div class="list-group">
                    <a href="contatos" class="list-group-item list-group-item-action">
                        <i class="bi-mailbox fs-6"></i> Contatos
                    </a>
                    <a href="endereco" class="list-group-item list-group-item-action">
                        <i class="bi-house-door fs-6"></i> Endereço
                    </a>
                    <a href="pedidos"
                        class="list-group-item list-group-item-action bg-danger text-light">
                        <i class="bi-truck fs-6"></i> Pedidos
                    </a>
                    <a href="{{route('tela_cartao')}}" class="list-group-item list-group-item-action">
                        <i class="bi bi-card-list"></i> Cartão
                    </a>
                    <a href="/" class="list-group-item list-group-item-action">
                        <i class="bi-door-open fs-6"></i> Sair
                    </a>
                </div>
            </div>
            <div class="col-8">
                <div class="accordion" id="divPedidos">
                    @foreach($compras as $compra)
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#pedido{{$compra->id}}">
                                @if($compra->status == 'pedido recebido')
                                <b>Pedido {{$compra->id}} - <span style="color:blue">{{$compra->status}}</span></b>
                                @elseif($compra->status == 'Pedido Cancelado')
                                <b>Pedido {{$compra->id}} - <span style="color:red">{{$compra->status}}</span></b>
                                @elseif($compra->status == 'Pedido Entregue')
                                <b>Pedido {{$compra->id}} - <span style="color:green">{{$compra->status}}</span></b>
                                @else
                                <b>Pedido {{$compra->id}} - <span style="color:orange">{{$compra->status}}</span></b>
                                @endif
                            @if($compra->status == 'Pedido Entregue' or $compra->status == 'Pedido Cancelado' )
                            <span class="mx-1">realizado em {{ date('d/m/y',strtotime($compra->hora_compra)) }} - Encerrado em {{ date('d/m/y',strtotime($compra->hora_finalizacao)) }} </span>
                            @else
                            <span class="mx-1">realizado em {{ date('d/m/y',strtotime($compra->hora_compra)) }}</span>
                            @endif
                            </button>
                        </h2>
                        <div id="pedido{{$compra->id}}" class="accordion-collapse collapse" data-bs-parent="#divPedidos">
                            <div class="accordion-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Produto</th>
                                            <th class="text-end">R$ Unit.</th>
                                            <th class="text-center">Qtde.</th>
                                            <th class="text-end">Subtotal</th>
                                        </tr>
                                    </thead>
                                    @foreach($produtos as $produtosachados)
                                    @if($produtosachados->fk_compra_id == $compra->id)
                                        <tbody>
                                            <tr>
                                                <td>{{$produtosachados->nomeproduto}}</td>
                                                <td class="text-end">R$ {{$produtosachados->valorproduto}}</td>
                                                <td class="text-center">{{$produtosachados->quantidade}}</td>
                                                <td class="text-end">R$ {{$produtosachados->valorproduto * $produtosachados->quantidade}}</td>
                                            </tr>
                                        </tbody>
                                    @endif
                                    @endforeach
                                    <tfoot>
                                        <tr>
                                            <th class="text-end" colspan="3">Valor dos Produtos:</th>
                                            <td class="text-end">R$ {{$compra->valortotal}}</td>
                                        </tr>
                                        <tr>
                                            <th class="text-end" colspan="3">Valor do Frete:</th>
                                            @if(is_null($compra->frete))
                                            <td class="text-end"> R$ 0,00</td>
                                            @else
                                            <td class="text-end">R$ 7,50</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <th class="text-end" colspan="3">Valor a Pagar:</th>
                                            @if(is_null($compra->frete))
                                            <td class="text-end">R$ {{$compra->valortotal}}</td>
                                            @else
                                            <td class="text-end">R$ {{$compra->valortotal + 7.50}}</td>
                                            @endif
                                            
                                        </tr>
                                        <tr>
                                            <th class="text-end" colspan="3">Forma de Pagamento:</th>
                                            @if($compra->tipo_pagamento == 'dinheiro')
                                            <td class="text-end">pagamento em dinheiro</td>
                                            @elseif($compra->tipo_pagamento == 'pix')
                                            <td class="text-end">pagamento em pix</td>
                                            @else
                                            <td class="text-end">pagamento em cartão</td>
                                            @endif
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <br>
@endsection