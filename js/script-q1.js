/*QUESTÃO 1 - CALCULANDO MÉDIA*/

var botao = document.querySelector('#botao');
var aluno = document.querySelector('#aluno');
var disciplina = document.querySelector('#disciplina');
var nota1 = document.querySelector('#nota1');
var nota2 = document.querySelector('#nota2');
var resultado = document.querySelector('#resultado');

botao.addEventListener('click', () => {

    if (aluno.value != "" && disciplina.value != "Selecione a Disciplina" && nota1.value != "" && nota2.value != "") {

        let media = (parseFloat(nota1.value) + parseFloat(nota2.value)) / 2;
        let status;

        if (media >= 7) {
            status = "foi <b>Aprovado</b>";
        } else if (media > 3) {
            status = "está de <b>Recuperação</b>";
        } else {
            status = "foi <b>Reprovado</b>";
        }

        resultado.innerHTML = aluno.value + ", você " + status + " na disciplina <b>" + disciplina.value + "</b> com média igual a <b>" + media + "</b>";

    } else {
        alert('Existe campos vazios! Preencha-os...');
    }
})
