@extends('layouts.main_login')

@section('title', 'Bem Doces | Administrador')

@section('content')
    <div class="container">
        <h1>Novo Produto</h1>
        <hr>
        <form class="mt-3" action="{{route('cadastrar')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-floating mb-3 col-md-6">
                        <input class="form-control border" type="text" placeholder=" " />
                        <label for="txtEmail">Nome do Produto</label>
                    </div>
                    <div class="form-floating col-sm-12 col-md-6">
                        <textarea style="width: 100%; height: 150px;" class="form-control" id="descricao" placeholder= " "></textarea>
                        <label for="descricao">Descrição:</label>
                    </div>   
                <br>
                </div>
                <div class="col-sm-12">
                    <div class="col-md-4">
                        <div class="form-floating mb-3">
                            <input class="form-control" type="number" placeholder=" " />
                            <label for="txtCEP">Preço: <span></span></label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating mb-3">
                            <input class="form-control border" type="number" placeholder=" " />
                            <label class="form-label" for="txtConfirmacaoSenha">Quantidade: </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating mb-3">
                            <select class="form-control" id="tipo" placeholder=" ">
                                <option>Embalagens e Descartáveis</option>
                                <option>Artigos para Festa</option>
                                <option>Doces e Bebidas</option>
                            </select>
                            <label for="tipo"><b>Tipo:</b></label>
                        </div>
                    </div>
                    <div class="form-floating col-md-4">
                        <div class="form-floating mb-3">
                            <input class="form-control" type="file" accept="image/png,image/jpeg" id="imagemInput" placeholder=" " />
                            <label for="imagemInput">Imagem:</label>
                        </div>
                    </div>
                    <div class="form-floating col-md-4">
                        <div class="form-floating mb-3" id="imagemPreview"></div>
                    </div>
                </div>
            </div>
            <br>
            <a class="btn btn-lg btn-light btn-outline-danger" href="gerenciar_produtos">Cancelar</a>
            <input type="submit" value="Cadastrar" class="btn btn-lg btn-light btn-outline-danger"/>
            <br><br>
        </form>
    </div>
    <script src="/js/preview_imagem.js"></script>
@endsection
