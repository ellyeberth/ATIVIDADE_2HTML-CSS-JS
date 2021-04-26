var resultadoimc = document.querySelector('#resultadoimc');
var botaocalcularimc = document.querySelector('#botaocalcularimc');
var paciente = document.querySelector('#paciente');
var peso = document.querySelector('#peso');
var altura = document.querySelector('#altura');


botaocalcularimc.addEventListener('click', () => {

    let imc = parseFloat(peso.value) / (parseFloat(altura.value) * parseFloat(altura.value));
    let info = String;

    if (imc <= 18.5){
        info = "BAIXO PESO | Peso baixo para a altura. Maior probabilidade de anorexia";
    }
    else if (imc > 18.5 && imc <= 24.9){
        info = "PESO NORMAL | Maior probabilidade de ser um indivíduo saudável.";
    }
    else if (imc >= 25.0 && imc <= 29.9){
        info = "PRÉ-OBESIDADE | Alguma probabilbidade de problemas de saúde. Predisposição a tornar-se obeso.";
    }
    else if (imc >= 30.0 && imc <= 34.9){
        info = "OBESIDADE I | Risco Moderado de diabetes tipo II, hipertensão, colesterol, cardiopatia.";
    }
    else if (imc >= 35.0 && imc <= 39.9){
        info = "OBESIDADE II | Risco Grave. Aumenta o risco das doenças associadas. O risco de mortalidade aumenta 50%.";
    }
    else if (imc >= 40.0){
        info = "OBESIDADE III | Risco Muito Grave. O risco de doenças associadas assim como a mortalidade aumenta 90%.";
    }
    

    resultadoimc.innerHTML = "<b>Paciente: </b>" + paciente.value + "<br>" +
        "<b>Peso: </b>" + peso.value + "<br>" +
        "<b>Altura: </b>" + altura.value + "<br><br><hr>" +
        "<b>IMC: " + imc .toFixed(1) + "</b>" + "<br><br><br>" +
        "<b>Obs: </b>" + info
    ;
})