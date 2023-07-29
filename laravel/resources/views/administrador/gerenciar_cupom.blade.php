@extends('layouts.main')

@section('title', 'Bem Doces | Administrador')

@section('content')
    <div class="container mt-4">
        <h1>Área do Administrador</h1>
        <div class="row gx-3">           
            <div>
                <a href="{{route('novo-cupom')}}" class="margem d-inline-block"><button type="button" class="btn btn-danger">Adicionar novo cupom</button></a><br><br>
                <form action="">
                    <div class="accordion" id="divPedidos">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#pedido000010">
                                    <b>Cupom 001</b>
                                </button>
                            </h2>
                            <div id="pedido000010" class="accordion-collapse collapse" data-bs-parent="#divPedidos">
                                <div class="accordion-body">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="text" id="txtRua" placeholder=" " disabled/>
                                        <label for="txtRua">Descrição: <span></span></label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="descricao" placeholder= " " disabled></input>
                                        <label for="descricao">Código: <span></span></label>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="valorPromocional" placeholder=" " disabled></input>
                                                <label for="valorPromocional">Valor promocional: <span></span></label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="usosRestantes" placeholder=" " disabled></input>
                                                <label for="usosRestantes">Usos restantes: <span></span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row"> 
                                        <div class="col-md-6 col-12 mb-3"> 
                                            <div class="border p-3">
                                                <button type="button" class="btn btn-light custom-cursor-pointer" id="mostrarProdutos1">Aplicáveis ao tipo</button>
                                                <div id="listaProdutos1" style="display: none;">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" name="produto" value="produto2" id="produto2" />
                                                        <label class="form-check-label custom-cursor-pointer" for="produto2">Embalagens e Descartáveis</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" name="produto" value="produto3" id="produto3" />
                                                        <label class="form-check-label custom-cursor-pointer" for="produto3">Artigos para Festa</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" name="produto" value="produto4" id="produto4" />
                                                        <label class="form-check-label custom-cursor-pointer" for="produto4">Doces e Bebida</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12"> 
                                            <div class="border p-3"> 
                                                <button type="button" class="btn btn-light custom-cursor-pointer" id="mostrarProdutos2">Produtos vinculados</button>
                                                <div id="listaProdutos2" style="display: none;">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" name="produto" value="2" id="2" />
                                                        <label class="form-check-label custom-cursor-pointer" for="2">produto 2</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" name="produto" value="1" id="1" />
                                                        <label class="form-check-label custom-cursor-pointer" for="1">produto 1 produto 1 produto 1 produto 1 produto 1 produto 1 produto 1 produto 1 produto 1 produto 1 produto 1</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <br><br>
                                    <button type="button" class="btn btn-danger">Excluir cupom</button>
                                    <button type="button" class="btn btn-success">Salvar alterações</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="/js/expandir_checkbox_cupom.js"></script>
@endsection
