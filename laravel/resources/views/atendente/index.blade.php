@extends('layouts.main')

@section('title', 'Bem Doces')

@section('header')

@section('content')
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Comprador</th>
            <th scope="col">Status</th>
            <th scope="col">Descrição</th>
            <th scope="col">Endereço</th>
            <th scope="col">Alterar status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($compras as $compra)
        <tr>
            <th scope="row">{{$compra->id}}</th>
            <td>{{$compra->comprador->id}} - {{$compra->comprador->nome}}</td>
            <td>
                {{$compra->status}}
            </td>
            <td>{{$compra->descricao}}</td>
            <td>
                {{$compra->endereco->rua}} 
                {{$compra->endereco->numero}}, 
                {{$compra->endereco->bairro}}, 
                {{$compra->endereco->cidade}} - 
                {{$compra->endereco->estado}}
            </td>
            <td>
                <form action="{{route('alterar_status_compra')}}" id="alterarStatus.{{$compra->id}}">
                    <input type="hidden" id="id_compra" name="id_compra" value="{{$compra->id}}" />
                    <select form="alterarStatus.{{$compra->id}}" class="novo_status" id="novo_status" name="novo_status" onchange="this.form.submit()">
                        <option selected>Selecione o novo status</option>
                        <option value="compra efetuada">Compra efetuada</option>
                        <option value="destinatario ausente">Destinatário ausente</option>
                        <option value="compra cancelada">Compra cancelada</option>
                        <option value="compra finalizada">Compra finalizada</option>
                    </select>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
@endsection