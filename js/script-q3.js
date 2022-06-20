var contracheque = document.querySelector('#contracheque');
var botaocalcular = document.querySelector('#botaocalcular');
var funcionario = document.querySelector('#funcionario');
var cargo = document.querySelector('#cargo');
var salario = document.querySelector('#salario');


botaocalcular.addEventListener('click', () => {

    if (funcionario.value != "" && cargo.value != "Cargo" && salario.value != ""){

        let aumento = parseFloat;
        let inss = parseFloat;
        

        switch (cargo.value){
            case "Atendente":
                aumento = ((0.08 * parseFloat(salario.value)) + parseFloat(salario.value));
            break;
            case "Estoquista":
                aumento = ((0.06 * parseFloat(salario.value)) + parseFloat(salario.value));
            break;
            case "Gerente":
                aumento = ((0.03 * parseFloat(salario.value)) + parseFloat(salario.value));
            break;
        }

        if (aumento <= 1045.00){
            inss = 0.075 * aumento;
        }
        else if (aumento >= 1045.01 && aumento <= 2089.60){
            inss = 0.09 * aumento;
        }else{
            inss = 0.12 * aumento;
        }
        

        contracheque.innerHTML = "<hr><b>Funcionário:</b> " + funcionario.value + "<br>" +
            "<b>Cargo:</b> " + cargo.value + "<br><br>" +
            "<b>Salário Atual:</b> R$" + parseFloat(salario.value) .toFixed(2) + "<br>" +
            "<b>Salário Atualizado:</b> R$" + aumento .toFixed(2) + "<br>" +
            "<b>Desconto INSS:</b> R$" + inss .toFixed(2) + "<br><br><hr>" +
            "<b>Salário Líquido:</b> R$" + (aumento - inss) .toFixed(2) + "<hr>"
        ;

    }
    else{
        alert('Erro ao calcular. Existe campos vazios!');
    }
})