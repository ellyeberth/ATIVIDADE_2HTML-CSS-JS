/*QUESTÃO 2 - LOJA APPLE*/

var botaopreco = document.querySelector('#botaopreco');
var botaogerar = document.querySelector('#botaogerar');
var botaovalortotal = document.querySelector('#botaovalortotal');
var cliente = document.querySelector('#cliente');
var produto = document.querySelector('#produto');
var qtde = document.querySelector('#qtde');
var parcelas = document.querySelector('#parcelas');
var valortotal = document.querySelector('#valortotal');
var carne = document.querySelector('#carne');
var valoriphone = parseFloat();


botaopreco.addEventListener('click', () => {

    if (produto.value != "" && qtde.value != "") {

        if (produto.value == "iPhone XR") {
            valoriphone = 4999;
        } else if (produto.value == "iPhone 11") {
            valoriphone = 5699;
        } else if (produto.value == "iPhone 11 Pro") {
            valoriphone = 6599;
        } else if (produto.value == "iPhone SE") {
            valoriphone = 3699;
        } else if (produto.value == "iPhone 12") {
            valoriphone = 7999;
        } else if (produto.value == "iPhone 12 Pro") {
            valoriphone = 10999;
        } else {
            valoriphone = 0;
        }

        valorproduto.innerHTML = "R$" + parseFloat(valoriphone) .toFixed(2);

        valortotal.innerHTML = "R$" + parseFloat(valoriphone * qtde.value) .toFixed(2);


    } else {
        alert('Erro ao calcular o Valor Total. Campo Quantidade está vazio!')
    }
})


botaogerar.addEventListener('click', () => {

    if (cliente.value != "" && produto.value != "Selecione o Produto" && qtde.value != "" && parcelas.value != "Parcelas") {

        for (var cont = 1; cont <= parcelas.value; cont++) {

            carne.innerHTML = carne.innerHTML + "Cliente: " + cliente.value + "<br>" +
                "Produto: " + produto.value + "<br>" +
                "Valor: <b>R$" + ((valoriphone * qtde.value) / parcelas.value).toFixed(2) + "<b><br><br>" +
                "Parcelas: <b>" + cont + "/" + parcelas.value + "<b><br><br><hr><br><br>";
        }

    } else {
        alert('Existe campos vazios! Preencha-os...');
    }


})
