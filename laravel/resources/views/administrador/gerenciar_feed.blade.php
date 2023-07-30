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
            <br><br><br>
            <div>
                <a href="{{route('nova-noticia')}}" class="margem d-inline-block"><button type="button" class="btn btn-primary">Adicionar nova notícia</button></a><br><br>
                <form action="">
                    <div class="accordion" id="divPedidos">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#pedido000010">
                                    <b>Notícia 001</b>
                                </button>
                            </h2>
                            <div id="pedido000010" class="accordion-collapse collapse" data-bs-parent="#divPedidos">
                                <div class="accordion-body">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="text" id="txtRua" placeholder=" " />
                                        <label for="txtRua">Título: <span></span></label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea style="width: 100%; height: 150px;" class="form-control" id="descricao" placeholder= " "></textarea>
                                        <label for="descricao">Descrição: <span></span></label>
                                    </div>
                                    <div class="d-flex justify-content-center" id="imagemPreview"></div>
                                    <br><br>
                                    <button type="button" class="btn btn-danger">Excluir notícia</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

    