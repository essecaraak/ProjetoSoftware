@extends('layouts.main_login')

@section('title', 'Bem Doces | Administrador')

@section('content')
    <div class="container">
        <h1>Área do Administrador</h1>
        <div class="row gx-3">
            <div class="col-6">
                <div class="list-group">
                    <div class="d-flex align-items-center">
                        <a href="" class="list-group-item list-group-item-action bg-danger text-light">
                            <i class="bi bi-cash-stack fs-6"></i> Gerenciar Produtos
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="list-group">
                    <div class="d-flex align-items-center">
                        <a href="gerenciar_feed" class="list-group-item list-group-item-action">
                            <i class="bi-mailbox fs-6"></i> Gerenciar Feed Notícias
                        </a>
                    </div>
                </div>
            </div>            
            <div>
                <a href="{{route('novo-produto-index')}}" class="margem d-inline-block"><button type="button" class="btn btn-danger">Adicionar novo produto</button></a>
                <form action="">
                    <div class="accordion" id="divPedidos">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#pedido000010">
                                    <b>Nome do Produto</b>
                                </button>
                            </h2>
                            <div id="pedido000010" class="accordion-collapse collapse" data-bs-parent="#divPedidos">
                                <div class="accordion-body">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="text" id="txtRua" placeholder=" " />
                                        <label for="txtRua">Nome: <span></span></label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea style="width: 100%; height: 150px;" class="form-control" id="descricao" placeholder= " "></textarea>
                                        <label for="descricao">Descrição: <span></span></label>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <div class="form-floating mb-3 col-md-3">
                                                <input class="form-control" type="number" placeholder=" " />
                                                <label for="txtCEP">Preço: <span></span></label>
                                            </div>
                                            <div class="form-floating mb-3 col-md-3 espacamento">
                                                <input class="form-control" type="number" id="txtNumero" placeholder=" " />
                                                <label for="txtNumero">Quantidade: <span></span></label>
                                            </div>
                                            <div class="form-floating mb-3 col-md-3 espacamento">
                                                <input class="form-control" type="file" accept="image/png,image/jpeg" id="imagemInput" placeholder=" " />
                                                <label for="imagemInput">Imagem:</label>
                                            </div>
                                            <div class="form-floating mb-3 col-md-3 espacamento">
                                                <select class="form-control" id="tipo" placeholder=" ">
                                                    <option>Embalagens e Descartáveis</option>
                                                    <option>Artigos para Festa</option>
                                                    <option>Doces e Bebidas</option>
                                                </select>
                                                <label for="tipo"><b>Tipo:</b></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center" id="imagemPreview"></div>
                                    <br><br>
                                    <button type="button" class="btn btn-danger">Excluir produto</button>
                                    <button type="button" class="btn btn-success">Salvar alterações</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>
    <script src="/js/preview_imagem.js"></script>
@endsection