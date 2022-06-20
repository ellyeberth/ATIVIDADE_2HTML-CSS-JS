<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">

    <title>Questão 1</title>
</head>

<body>
    <nav>
        <ul>
            <a href="../index.php"><img src="../img/logo.png" alt="logo"></a>

            <li class="dropdown">
                <button type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Questões
                </button>
                <p class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="./questao-1.php">Questão 1</a>
                    <a class="dropdown-item" href="./questao-2.php">Questão 2</a>
                    <a class="dropdown-item" href="./questao-3.php">Questão 3</a>
                    <a class="dropdown-item" href="./questao-4.php">Questão 4</a>
                </p>
            </li>
            <div class="clear"></div>

        </ul>
    </nav>
    <section class="one-q">
        <form>
            <h1>Calcule sua Média</h1>
            <div class="aluno input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Aluno</span>
                <input id="aluno" type="text" class="form-control" placeholder="Nome Completo..." aria-label="Username"
                    aria-describedby="addon-wrapping" required>
            </div>
            <select id="disciplina" class="form-select" aria-label="Default select example" required>
                <option class="ocultar" selected>Selecione a Disciplina</option>
                <option value="Análise e Desenvolvimento de Software">Análise e Desenvolvimento de Software</option>
                <option value="Interação Humano-Computador">Interação Humano-Computador</option>
                <option value="Programação WEB">Programação WEB</option>
                <option value="Banco de Dados II">Banco de Dados II</option>
                <option value="Sistemas de Informações Gerenciais">Sistemas de Informações Gerenciais</option>
            </select>

            <div class="nota1 input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Nota 1</span>
                <input id="nota1" type="number" class="form-control" placeholder="0.0" aria-label="Username"
                    aria-describedby="addon-wrapping" required>
            </div>

            <div class="nota2 input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Nota 2</span>
                <input id="nota2" type="number" class="form-control" placeholder="0.0" aria-label="Username"
                    aria-describedby="addon-wrapping" required>
            </div>

            <button id="botao" type="button" class="btn btn-info">Calcular</button>
            <div class="clear"></div>

            <div class="resultado">
                <h3 id="resultado">Preencha todos os campos!</h3>
            </div>

        </form>
    </section>

    <footer>
        <a href="https://github.com/ellyeberth/ATIVIDADE_2HTML-CSS-JS.git" target="_blank">
            <img class="github" src="../img/github.png" alt="github">
            <h5>GitHub</h5>
        </a>
        <hr>
        <h6>Copyright © 2021 Ellyeberth Leandro. Todos os Direitos Reservados | Aluno Programador Full Stack Master</h6>
        <h7>Juazeiro do Norte - Ceará</h7>
    </footer>


    <script src="../js/script-q1.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>