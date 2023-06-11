@extends('layouts.main')

@section('title', 'Bem Doces')

@section('header')
<div class="container">
    <div id="carouselMain" class="carousel slide carousel-dark" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <img src="/img/slides/slide01.jpg" class="d-none d-md-block w-100" alt="">
                <img src="/img/slides/slide01small.jpg" class="d-block d-md-none  w-100" alt="">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="/img/slides/slide01.jpg" class="d-none d-md-block w-100" alt="">
                <img src="/img/slides/slide01small.jpg" class="d-block d-md-none  w-100" alt="">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="/img/slides/slide01.jpg" class="d-none d-md-block w-100" alt="">
                <img src="/img/slides/slide01small.jpg" class="d-block d-md-none  w-100" alt="">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselMain" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselMain" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>
    <hr class="mt-3">
</div>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-5">
            <form class="justify-content-center justify-content-md-start mb-3 mb-md-0">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" placeholder="Digite aqui o que procura">
                    <button class="btn btn-danger">Buscar</button>
                </div>
            </form>
        </div>
        <div class="col-12 col-md-7">
            <div class="d-flex flex-row-reverse justify-content-center justify-content-md-start">
                <form class="d-inline-block">
                    <select class="form-select form-select-sm">
                        <option>Ordenar pelo nome</option>
                        <option>Ordenar pelo menor preço</option>
                        <option>Ordenar pelo maior preço</option>
                    </select>
                </form>
                <nav class="d-inline-block me-3">
                    <ul class="pagination pagination-sm my-0">
                        <li class="page-item">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item disabled">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">5</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">6</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <hr mt-3>

    <div class="row g-3">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card text-center bg-light">
                <a href="#" class="position-absolute end-0 p-2 text-danger">
                    <i class="bi-suit-heart" style="font-size: 24px; line-height: 24px;"></i>
                </a>
                <a href="/produto.html">
                    <img src="/img/produtos/000001.jpg" class="card-img-top">
                </a>
                <div class="card-header">
                    R$ 4,50
                </div>
                <div class="card-body">
                    <h5 class="card-title">Banana Prata</h5>
                    <p class="card-text truncar-3l">
                        Banana prata da melhor qualidade possível, direto do produtor rural para a sua mesa.
                    </p>
                </div>
                <div class="card-footer">
                    <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                        Adicionar ao Carrinho
                    </a>
                    <small class="text-success">320,5kg em estoque</small>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card text-center bg-light">
                <a href="#" class="position-absolute end-0 p-2 text-danger">
                    <i class="bi-suit-heart" style="font-size: 24px; line-height: 24px;"></i>
                </a>
                <img src="/img/produtos/000002.jpg" class="card-img-top">
                <div class="card-header">
                    R$ 4,50
                </div>
                <div class="card-body">
                    <h5 class="card-title">Banana Prata</h5>
                    <p class="card-text truncar-3l">
                        Banana prata da melhor qualidade possível, direto do produtor rural para a sua mesa.
                    </p>
                </div>
                <div class="card-footer">
                    <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                        Adicionar ao Carrinho
                    </a>
                    <small class="text-success">320,5kg em estoque</small>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card text-center bg-light">
                <a href="#" class="position-absolute end-0 p-2 text-danger">
                    <i class="bi-suit-heart" style="font-size: 24px; line-height: 24px;"></i>
                </a>
                <img src="/img/produtos/000003.jpg" class="card-img-top">
                <div class="card-header">
                    R$ 4,50
                </div>
                <div class="card-body">
                    <h5 class="card-title">Banana Prata</h5>
                    <p class="card-text truncar-3l">
                        Banana prata da melhor qualidade possível, direto do produtor rural para a sua mesa.
                    </p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-light disabled mt-2 d-block">
                        <small>Reabastecendo Estoque</small>
                    </a>
                    <small class="text-danger">
                        <b>Produto Esgotado</b>
                    </small>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card text-center bg-light">
                <a href="#" class="position-absolute end-0 p-2 text-danger">
                    <i class="bi-suit-heart-fill" style="font-size: 24px; line-height: 24px;"></i>
                </a>
                <img src="/img/produtos/000004.jpg" class="card-img-top">
                <div class="card-header">
                    R$ 4,50
                </div>
                <div class="card-body">
                    <h5 class="card-title">Banana Prata</h5>
                    <p class="card-text truncar-3l">
                        Banana prata da melhor qualidade possível, direto do produtor rural para a sua mesa.
                    </p>
                </div>
                <div class="card-footer">
                    <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                        Adicionar ao Carrinho
                    </a>
                    <small class="text-success">320,5kg em estoque</small>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card text-center bg-light">
                <a href="#" class="position-absolute end-0 p-2 text-danger">
                    <i class="bi-suit-heart" style="font-size: 24px; line-height: 24px;"></i>
                </a>
                <img src="/img/produtos/000005.jpg" class="card-img-top">
                <div class="card-header">
                    R$ 4,50
                </div>
                <div class="card-body">
                    <h5 class="card-title">Banana Prata</h5>
                    <p class="card-text truncar-3l">
                        Banana prata da melhor qualidade possível, direto do produtor rural para a sua mesa.
                    </p>
                </div>
                <div class="card-footer">
                    <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                        Adicionar ao Carrinho
                    </a>
                    <small class="text-success">320,5kg em estoque</small>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card text-center bg-light">
                <a href="#" class="position-absolute end-0 p-2 text-danger">
                    <i class="bi-suit-heart" style="font-size: 24px; line-height: 24px;"></i>
                </a>
                <img src="/img/produtos/000006.jpg" class="card-img-top">
                <div class="card-header">
                    R$ 4,50
                </div>
                <div class="card-body">
                    <h5 class="card-title">Banana Prata</h5>
                    <p class="card-text truncar-3l">
                        Banana prata da melhor qualidade possível, direto do produtor rural para a sua mesa.
                    </p>
                </div>
                <div class="card-footer">
                    <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                        Adicionar ao Carrinho
                    </a>
                    <small class="text-success">320,5kg em estoque</small>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card text-center bg-light">
                <a href="#" class="position-absolute end-0 p-2 text-danger">
                    <i class="bi-suit-heart" style="font-size: 24px; line-height: 24px;"></i>
                </a>
                <img src="/img/produtos/000007.jpg" class="card-img-top">
                <div class="card-header">
                    R$ 4,50
                </div>
                <div class="card-body">
                    <h5 class="card-title">Banana Prata</h5>
                    <p class="card-text truncar-3l">
                        Banana prata da melhor qualidade possível, direto do produtor rural para a sua mesa.
                    </p>
                </div>
                <div class="card-footer">
                    <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                        Adicionar ao Carrinho
                    </a>
                    <small class="text-success">320,5kg em estoque</small>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card text-center bg-light">
                <a href="#" class="position-absolute end-0 p-2 text-danger">
                    <i class="bi-suit-heart" style="font-size: 24px; line-height: 24px;"></i>
                </a>
                <img src="/img/produtos/000008.jpg" class="card-img-top">
                <div class="card-header">
                    R$ 4,50
                </div>
                <div class="card-body">
                    <h5 class="card-title">Banana Prata</h5>
                    <p class="card-text truncar-3l">
                        Banana prata da melhor qualidade possível, direto do produtor rural para a sua mesa.
                    </p>
                </div>
                <div class="card-footer">
                    <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                        Adicionar ao Carrinho
                    </a>
                    <small class="text-success">320,5kg em estoque</small>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card text-center bg-light">
                <a href="#" class="position-absolute end-0 p-2 text-danger">
                    <i class="bi-suit-heart-fill" style="font-size: 24px; line-height: 24px;"></i>
                </a>
                <img src="/img/produtos/000009.jpg" class="card-img-top">
                <div class="card-header">
                    R$ 4,50
                </div>
                <div class="card-body">
                    <h5 class="card-title">Banana Prata</h5>
                    <p class="card-text truncar-3l">
                        Banana prata da melhor qualidade possível, direto do produtor rural para a sua mesa.
                    </p>
                </div>
                <div class="card-footer">
                    <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                        Adicionar ao Carrinho
                    </a>
                    <small class="text-success">320,5kg em estoque</small>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card text-center bg-light">
                <a href="#" class="position-absolute end-0 p-2 text-danger">
                    <i class="bi-suit-heart" style="font-size: 24px; line-height: 24px;"></i>
                </a>
                <img src="/img/produtos/000010.jpg" class="card-img-top">
                <div class="card-header">
                    R$ 4,50
                </div>
                <div class="card-body">
                    <h5 class="card-title">Banana Prata</h5>
                    <p class="card-text truncar-3l">
                        Banana prata da melhor qualidade possível, direto do produtor rural para a sua mesa.
                    </p>
                </div>
                <div class="card-footer">
                    <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                        Adicionar ao Carrinho
                    </a>
                    <small class="text-success">320,5kg em estoque</small>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card text-center bg-light">
                <a href="#" class="position-absolute end-0 p-2 text-danger">
                    <i class="bi-suit-heart" style="font-size: 24px; line-height: 24px;"></i>
                </a>
                <img src="/img/produtos/000011.jpg" class="card-img-top">
                <div class="card-header">
                    R$ 4,50
                </div>
                <div class="card-body">
                    <h5 class="card-title">Banana Prata</h5>
                    <p class="card-text truncar-3l">
                        Banana prata da melhor qualidade possível, direto do produtor rural para a sua mesa.
                    </p>
                </div>
                <div class="card-footer">
                    <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                        Adicionar ao Carrinho
                    </a>
                    <small class="text-success">320,5kg em estoque</small>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card text-center bg-light">
                <a href="#" class="position-absolute end-0 p-2 text-danger">
                    <i class="bi-suit-heart" style="font-size: 24px; line-height: 24px;"></i>
                </a>
                <img src="/img/produtos/000012.jpg" class="card-img-top">
                <div class="card-header">
                    R$ 4,50
                </div>
                <div class="card-body">
                    <h5 class="card-title">Banana Prata</h5>
                    <p class="card-text truncar-3l">
                        Banana prata da melhor qualidade possível, direto do produtor rural para a sua mesa.
                    </p>
                </div>
                <div class="card-footer">
                    <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                        Adicionar ao Carrinho
                    </a>
                    <small class="text-success">320,5kg em estoque</small>
                </div>
            </div>
        </div>
    </div>

    <hr class="mt-3">

    <div class="row pb-3">
        <div class="col-12">
            <div class="d-flex flex-row-reverse justify-content-center justify-content-md-start">
                <form class="d-inline-block">
                    <select class="form-select form-select-sm">
                        <option>Ordenar pelo nome</option>
                        <option>Ordenar pelo menor preço</option>
                        <option>Ordenar pelo maior preço</option>
                    </select>
                </form>
                <nav class="d-inline-block me-3">
                    <ul class="pagination pagination-sm my-0">
                        <li class="page-item">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item disabled">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">5</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">6</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
