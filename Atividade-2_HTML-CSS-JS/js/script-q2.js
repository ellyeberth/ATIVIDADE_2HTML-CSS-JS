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
var juros = parseFloat();


botaopreco.addEventListener('click', () => {

    if (produto.value != "Selecione o Produto" && qtde.value != "" && parcelas.value != "Parcelas") {


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
        } else if (produto.value == "MacBook Air") {
            valoriphone = 12999;
        } else if (produto.value == "Macbook Pro 13 pol.") {
            valoriphone = 17299;
        } else if (produto.value == "Macbook Pro 16 pol.") {
            valoriphone = 30299;
        } else if (produto.value == "iMac 27 pol.") {
            valoriphone = 30749;
        } else if (produto.value == "Mac Pro (Server)") {
            valoriphone = 79499;
        } else {
            valoriphone = 0;
        }

        switch (parcelas.value) {
            case "1":
                juros = 0;
            break;
            case "2":
                juros = 0;
            break;
            case "3":
                juros = 0.03;
            break;
            case "4":
                juros = 0;
            break;
            case "5":
                juros = 0;
            break;
            case "6":
                juros = 0.12;
            break;
        }

        valorproduto.innerHTML = "R$" + parseFloat(valoriphone).toFixed(2);
        
        valortotal.innerHTML = "R$" + parseFloat((valoriphone * qtde.value) + valoriphone * qtde.value * juros).toFixed(2);

    } else {
        alert('Existe campos vazios! Preencha-os...');
    }
})


botaogerar.addEventListener('click', () => {

    if (cliente.value != "" && produto.value != "Selecione o Produto" && qtde.value != "" && parcelas.value != "Parcelas") {


        for (var cont = 1; cont <= parcelas.value; cont++) {

            carne.innerHTML = carne.innerHTML + "Cliente: " + cliente.value + "<br>" +
                "Produto: " + produto.value + "<br>" +
                "Valor: <b>R$" + (((valoriphone * qtde.value) + valoriphone * qtde.value * juros) / parcelas.value).toFixed(2) + "<b><br><br>" +
                "Parcelas: <b>" + cont + "/" + parcelas.value + "<b><br><br><hr><br><br>";
        }

    } else {
        alert('Existe campos vazios! Preencha-os...');
    }


})
