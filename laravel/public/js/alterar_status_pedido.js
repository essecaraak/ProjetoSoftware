var tipoSelect = document.getElementById("status");
var status_cancelado = document.getElementById("status_cancelado");
var status_entregue = document.getElementById("status_entregue");
var status_estabelecimento = document.getElementById("status_estabelecimento");

tipoSelect.addEventListener("change", function() {
    if (tipoSelect.value === "Pedido Entregue") {
        status_entregue.style.display = "block";
    }

    else {
        status_entregue.style.display = "none";
    }

    if (tipoSelect.value === "Pedido aguardando busca pelo cliente" || tipoSelect.value === "Pedido saiu para a entrega" ) {
        status_estabelecimento.style.display = "block";
    }

    else {
        status_estabelecimento.style.display = "none";
    }

    if (tipoSelect.value === "Pedido Cancelado") {
        status_cancelado.style.display = "block";
    }  
    
    else {
        status_cancelado.style.display = "none";
    }
});