@extends('layouts.main')

@section('title', 'Bem Doces | Endereço')

@section('content')
    <div class="container">
        <h2>Nome do Cliente</h2>
        <div class="row gx-3">
            <div class="col-4">
                <div class="list-group">
                    <a href="contatos" class="list-group-item list-group-item-action">
                        <i class="bi-mailbox fs-6"></i> Contatos
                    </a>
                    <a href="endereco" class="list-group-item list-group-item-action bg-danger text-light">
                        <i class="bi-house-door fs-6"></i> Endereço
                    </a>
                    <a href="pedidos" class="list-group-item list-group-item-action">
                        <i class="bi-truck fs-6"></i> Pedidos
                    </a>
                    <a href="cartao" class="list-group-item list-group-item-action">
                        <i class="bi bi-card-list"></i> Cartão
                    </a>
                    <a href="/" class="list-group-item list-group-item-action">
                        <i class="bi-door-open fs-6"></i> Sair
                    </a>
                </div>
            </div>
            <div class="col-8">
                <a href="novo_endereco"><button type="button" class="btn btn-danger">Adicionar novo endereço</button></a><br><br>
                <form action="">
                    <div class="accordion" id="divPedidos">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#pedido000010">
                                    <b>Endereço 001</b>
                                </button>
                            </h2>
                            <div id="pedido000010" class="accordion-collapse collapse" data-bs-parent="#divPedidos">
                                <div class="accordion-body">
                                    <div class="d-flex align-items-center">
                                        <div class="form-floating mb-3 col-md-6 col-lg-4">
                                            <input class="form-control" type="text" id="txtCEP" placeholder=" " />
                                            <label for="txtCEP"><b>CEP:</b> <span>27310640</span></label>
                                        </div>
                                        <div class="form-floating mb-3 col-md-4 espacamento">
                                            <input class="form-control" type="text" id="txtNumero" placeholder=" " />
                                            <label for="txtNumero"><b>Número:</b> <span>89</span></label>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="text" id="txtRua" placeholder=" " />
                                        <label for="txtRua"><b>Rua:</b> <span>Osório Gomes de Brito</span></label>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="form-floating mb-3 col-md-6 col-lg-4">
                                            <input class="form-control" type="text" id="txtCidade" placeholder=" " />
                                            <label for="txtCEP"><b>Cidade:</b> <span>Barra Mansa</span></label>
                                        </div>
                                        <div class="form-floating mb-3 col-md-4 espacamento">
                                            <input class="form-control" type="text" id="txtBairro" placeholder=" " />
                                            <label for="txtNumero"><b>Bairro:</b> <span>Vista Alegre</span></label>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-danger">Excluir endereço</button>
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
@endsection