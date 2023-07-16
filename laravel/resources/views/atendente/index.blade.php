@extends('layouts.main')

@section('title', 'Bem Doces')

@section('content')
<!-- 
tipo 1 - Pedido solicitado
tipo 2 - Pedido saiu para entrega ao destinatário
tipo 3 - Pedido foi entregue
tipo 4 - Pedido cancelado

No JavaScript, há 2 mudanças principais para lidar com os selects:
a mudança do tipo 1 ao tipo 2, ou ao tipo 4
mudança do tipo 2 ao tipo 3, ou ao tipo 4

essas mudanças no JavaScript são controladas por meio do id do select, que é classificada como:
    status1 - pedido solicitado
    status1_ok - pedido foi foi marcado de solicitado para saiu para entrega ao destinatário
    status1_cancelado - pedido foi marcado de solicitado para cancelado

    status2 - pedido saiu para entrega ao destinatário
    status2_ok - pedido foi marcado de saiu para entrega ao destinatário como pedido entregue
    status2_cancelado - pedido foi marcado de saiu para entregar ao destinatário para cancelado
-->
<div class="container">
    <div class="row gx-3">
        <div class="col-md-4 d-none d-md-block" style="height:400px">
            <img src="img/atendente.png" style="width:90%; height:90%">
        </div>
        <div class="col-12 col-md-8">
            <div class="accordion" id="tipo4">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#pedido00001">
                            <b>Pedido 00001 - <span>Gabriel Prisco</span> - <span style="color:red">Pedido cancelado</span></b>
                            <span class="mx-1">(realizado em 11/10/2020)</span>
                        </button>
                    </h2>
                    <div id="pedido00001" class="accordion-collapse collapse" data-bs-parent="#divPedidos">
                        <i class="fas fa-info-circle"></i>
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
                                <tbody>
                                    <tr>
                                        <td>Abacate Manteiga</td>
                                        <td class="text-end">2,99</td>
                                        <td class="text-center">3</td>
                                        <td class="text-end">8,97</td>
                                    </tr>
                                    <tr>
                                        <td>Banana Prata</td>
                                        <td class="text-end">2,99</td>
                                        <td class="text-center">3</td>
                                        <td class="text-end">8,97</td>
                                    </tr>
                                    <tr>
                                        <td>Mamão Papaya</td>
                                        <td class="text-end">2,99</td>
                                        <td class="text-center">3</td>
                                        <td class="text-end">8,97</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="text-end" colspan="3">Valor dos Produtos:</th>
                                        <td class="text-end">26,91</td>
                                    </tr>
                                    <tr>
                                        <th class="text-end" colspan="3">Valor do Frete:</th>
                                        <td class="text-end">7,50</td>
                                    </tr>
                                    <tr>
                                        <th class="text-end" colspan="3">Valor a Pagar:</th>
                                        <td class="text-end">34,41</td>
                                    </tr>
                                    <tr>
                                        <th class="text-end" colspan="3">Forma de Pagamento:</th>
                                        <td class="text-end">Cartão 1x</td>
                                    </tr>
                                </tfoot>
                            </table>
                            <b>Justificativa: </b><span>Cliente não recebeu o entregador</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion" id="tipo1">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#pedido00002">
                            <b>Pedido 00002 - <span>Matheus Oliveira</span> - <span style="color:blue">Pedido solicitado</span></b>
                            <span class="mx-1">(realizado em 11/10/2020)</span>
                        </button>
                    </h2>
                    <div id="pedido00002" class="accordion-collapse collapse" data-bs-parent="#divPedidos">
                        <i class="fas fa-info-circle"></i>
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
                                <tbody>
                                    <tr>
                                        <td>Abacate Manteiga</td>
                                        <td class="text-end">2,99</td>
                                        <td class="text-center">3</td>
                                        <td class="text-end">8,97</td>
                                    </tr>
                                    <tr>
                                        <td>Banana Prata</td>
                                        <td class="text-end">2,99</td>
                                        <td class="text-center">3</td>
                                        <td class="text-end">8,97</td>
                                    </tr>
                                    <tr>
                                        <td>Mamão Papaya</td>
                                        <td class="text-end">2,99</td>
                                        <td class="text-center">3</td>
                                        <td class="text-end">8,97</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="text-end" colspan="3">Valor dos Produtos:</th>
                                        <td class="text-end">26,91</td>
                                    </tr>
                                    <tr>
                                        <th class="text-end" colspan="3">Valor do Frete:</th>
                                        <td class="text-end">7,50</td>
                                    </tr>
                                    <tr>
                                        <th class="text-end" colspan="3">Valor a Pagar:</th>
                                        <td class="text-end">34,41</td>
                                    </tr>
                                    <tr>
                                        <th class="text-end" colspan="3">Forma de Pagamento:</th>
                                        <td class="text-end">Cartão 1x</td>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="form-floating mb-3 text-center">
                                <select class="form-control" id="status1" name="status1" placeholder=" ">
                                    <option value="" disabled selected>Selecione</option>
                                    <option>Marcar pedido - saiu para entrega ao destinatário</option>
                                    <option>Cancelar pedido - status 1</option>
                                </select>
                                <label for="status1"><b>Alterar Status:</b></label>
                                </div>
                            <div id="status1_ok" style="display: none">
                                <div class="form-floating mb-3">
                                    <textarea style="width: 100%; height: 150px;" class="form-control" maxlength="1000" id="descricao1" name="descricao1" placeholder=" "></textarea>
                                    <label for="descricao1">Deixar anotação para o cliente (Opcional)</label>
                                </div>
                                <input type="submit" value="Confirmar que pedido saiu para entrega" class="btn btn-lg btn-light btn-outline-primary"/>
                            </div>
                            <div id="status1_cancelado" style="display: none">
                                <div class="form-floating mb-3">
                                    <textarea style="width: 100%; height: 150px;" class="form-control" maxlength="1000" id="descricao2" name="descricao2" placeholder=" "></textarea>
                                    <label for="descricao2">Informe o motivo:</label>
                                </div>
                                <input type="submit" value="Cancelar pedido" class="btn btn-lg btn-light btn-outline-danger"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion" id="tipo2">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#pedido00003">
                            <b>Pedido 00002 - <span>Matheus Oliveira</span> - <span style="color:orange">Pedido saiu para entrega</span></b>
                            <span class="mx-1">(realizado em 11/10/2020)</span>
                        </button>
                    </h2>
                    <div id="pedido00003" class="accordion-collapse collapse" data-bs-parent="#divPedidos">
                        <i class="fas fa-info-circle"></i>
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
                                <tbody>
                                    <tr>
                                        <td>Abacate Manteiga</td>
                                        <td class="text-end">2,99</td>
                                        <td class="text-center">3</td>
                                        <td class="text-end">8,97</td>
                                    </tr>
                                    <tr>
                                        <td>Banana Prata</td>
                                        <td class="text-end">2,99</td>
                                        <td class="text-center">3</td>
                                        <td class="text-end">8,97</td>
                                    </tr>
                                    <tr>
                                        <td>Mamão Papaya</td>
                                        <td class="text-end">2,99</td>
                                        <td class="text-center">3</td>
                                        <td class="text-end">8,97</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="text-end" colspan="3">Valor dos Produtos:</th>
                                        <td class="text-end">26,91</td>
                                    </tr>
                                    <tr>
                                        <th class="text-end" colspan="3">Valor do Frete:</th>
                                        <td class="text-end">7,50</td>
                                    </tr>
                                    <tr>
                                        <th class="text-end" colspan="3">Valor a Pagar:</th>
                                        <td class="text-end">34,41</td>
                                    </tr>
                                    <tr>
                                        <th class="text-end" colspan="3">Forma de Pagamento:</th>
                                        <td class="text-end">Cartão 1x</td>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="form-floating mb-3 text-center">
                                <select class="form-control" id="status2" name="status2" placeholder=" ">
                                    <option value="" disabled selected>Selecione</option>
                                    <option>Marcar como Pedido Entregue</option>
                                    <option>Cancelar pedido - status 2</option>
                                </select>
                                <label for="status2"><b>Alterar Status:</b></label>
                                </div>
                            <div id="status2_ok" style="display: none">
                                <div class="form-floating mb-3">
                                    <textarea style="width: 100%; height: 150px;" class="form-control" maxlength="1000" id="descricao3" name="descricao3" placeholder=" "></textarea>
                                    <label for="descricao3">Deixar anotação para o cliente (Opcional)</label>
                                </div>
                                <input type="submit" value="Confirmar que o pedido foi entregue" class="btn btn-lg btn-light btn-outline-success"/>
                            </div>
                            <div id="status2_cancelado" style="display: none">
                                <div class="form-floating mb-3">
                                    <textarea style="width: 100%; height: 150px;" class="form-control" maxlength="1000" id="descricao4" name="descricao4" placeholder=" "></textarea>
                                    <label for="descricao4">Informe o motivo:</label>
                                </div>
                                <input type="submit" value="Cancelar pedido" class="btn btn-lg btn-light btn-outline-danger"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion" id="tipo3">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#pedido00004">
                            <b>Pedido 00002 - <span>Matheus Oliveira</span> - <span style="color:green">Pedido entregue</span></b>
                            <span class="mx-1">(realizado em 11/10/2020)</span>
                        </button>
                    </h2>
                    <div id="pedido00004" class="accordion-collapse collapse" data-bs-parent="#divPedidos">
                        <i class="fas fa-info-circle"></i>
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
                                <tbody>
                                    <tr>
                                        <td>Abacate Manteiga</td>
                                        <td class="text-end">2,99</td>
                                        <td class="text-center">3</td>
                                        <td class="text-end">8,97</td>
                                    </tr>
                                    <tr>
                                        <td>Banana Prata</td>
                                        <td class="text-end">2,99</td>
                                        <td class="text-center">3</td>
                                        <td class="text-end">8,97</td>
                                    </tr>
                                    <tr>
                                        <td>Mamão Papaya</td>
                                        <td class="text-end">2,99</td>
                                        <td class="text-center">3</td>
                                        <td class="text-end">8,97</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="text-end" colspan="3">Valor dos Produtos:</th>
                                        <td class="text-end">26,91</td>
                                    </tr>
                                    <tr>
                                        <th class="text-end" colspan="3">Valor do Frete:</th>
                                        <td class="text-end">7,50</td>
                                    </tr>
                                    <tr>
                                        <th class="text-end" colspan="3">Valor a Pagar:</th>
                                        <td class="text-end">34,41</td>
                                    </tr>
                                    <tr>
                                        <th class="text-end" colspan="3">Forma de Pagamento:</th>
                                        <td class="text-end">Cartão 1x</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/js/alterar_status_pedido.js"></script>
@endsection