@extends('layouts.main')

@section('title', 'Bem Doces | Administrador')

@section('content')
    <div class="container">
        <h1>Novo Cupom</h1>
        <hr>
        <form class="mt-3" enctype="multipart/form-data" action="{{route('novo-produto-create')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-floating mb-3">
                        <input class="form-control border" type="text" name="nome" placeholder=" " />
                        <label for="nome">Código do cupom</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea style="width: 100%; height: 150px;" class="form-control" maxlength="1000" id="descricao" name="descricao" placeholder=" "></textarea>
                        <label for="descricao">Descrição:</label>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input class="form-control" type="number" step="any" name="valor" placeholder=" " />
                                <label for="txtCEP">Valor promocional:<span></span></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input class="form-control border" type="number" name="quantidade" placeholder=" " />
                                <label class="form-label" for="quantidade">Quantidade de uso:</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-12 mb-3"> 
                            <div class="border p-3" style="background-color: white">
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
                            <div class="border p-3" style="background-color: white"> 
                                <button type="button" class="btn btn-light custom-cursor-pointer" id="mostrarProdutos2">Produtos vinculados</button>
                                <div id="listaProdutos2" style="display: none;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="produto" value="2" id="2" />
                                        <label class="form-check-label custom-cursor-pointer" for="2">produto 2</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="produto" value="1" id="1" />
                                        <label class="form-check-label custom-cursor-pointer" for="1">produto 1</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <img src="/../../img/imagem_cupom.png" style="width:80%; height:80%">
                </div>
            </div>
            <br>
            <a class="btn btn-lg btn-light btn-outline-danger" href="{{route('administrador-index')}}">Cancelar</a>
            <input type="submit" value="Cadastrar" class="btn btn-lg btn-light btn-outline-danger"/>
            <br><br>
        </form>
    </div>
    <script src="/js/expandir_checkbox_cupom.js"></script>
@endsection
