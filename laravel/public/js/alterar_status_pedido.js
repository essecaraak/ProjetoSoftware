var tipoSelect1 = document.getElementById("status1");
var status1_cancelado = document.getElementById("status1_cancelado");
var status1_ok = document.getElementById("status1_ok");

tipoSelect1.addEventListener("change", function() {
    if (tipoSelect1.value === "Aguardando busca pelo cliente") {
        status1_cancelado.style.display = "block";
        status1_ok.style.display = "none";
        this.form.submit();
    } else if (tipoSelect1.value === "Pedido saiu para a entrega") {
        status1_cancelado.style.display = "none";
        status1_ok.style.display = "block";
        this.form.submit();
    } else {
        status1_cancelado.style.display = "none";
        status1_ok.style.display = "none";
    }
});

var tipoSelect2 = document.getElementById("status2");
var status2_cancelado = document.getElementById("status2_cancelado");
var status2_ok = document.getElementById("status2_ok");

tipoSelect2.addEventListener("change", function() {
    if (tipoSelect2.value === "pedido cancelado") {
        status2_cancelado.style.display = "block";
        status2_ok.style.display = "none";
    } else if (tipoSelect2.value === "Pedido Entregue") {
        status2_cancelado.style.display = "none";
        status2_ok.style.display = "block";
    } else {
        status2_cancelado.style.display = "none";
        status2_ok.style.display = "none";
    }
});
