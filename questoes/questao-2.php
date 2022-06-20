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

    <title>Questão 2</title>
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
            <h1>Loja Apple</h1>
            <div class="cliente input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Cliente</span>
                <input id="cliente" type="text" class="form-control" placeholder="Nome Completo..."
                    aria-label="Username" aria-describedby="addon-wrapping" required>
            </div>
            <select id="produto" class="form-select" aria-label="Default select example" required>
                <option class="ocultar" selected>Selecione o Produto</option>
                <option value="iPhone XR">iPhone XR</option>
                <option value="iPhone 11">iPhone 11</option>
                <option value="iPhone 11 Pro">iPhone 11 Pro</option>
                <option value="iPhone SE">iPhone SE</option>
                <option value="iPhone 12">iPhone 12</option>
                <option value="iPhone 12 Pro">iPhone 12 Pro</option>
                <option value="MacBook Air">MacBook Air</option>
                <option value="MacBook Pro 13 pol.">MacBook Pro 13 pol.</option>
                <option value="MacBook Pro 16 pol.">MacBook Pro 16 pol.</option>
                <option value="iMac 27 pol.">iMac 27 pol.</option>
                <option value="Mac Pro (Server)">Mac Pro (Server)</option>

            </select>

            <div class="valorproduto input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Valor</span>
                <span id="valorproduto" class="form-control">*******</span>
            </div>


            <select id="parcelas" class="form-select" aria-label="Default select example" required>
                <option class="ocultar" selected>Parcelas</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>

            <input spellcheck="true" id="qtde" type="number" class="form-control" placeholder="Quantidade"
                aria-label="Username" aria-describedby="addon-wrapping" required>

            <div class="valortotal input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Valor Total</span>
                <span id=valortotal class="form-control">R$*</span>
            </div>
            <button id="botaopreco" type="button" class="btn btn-outline-primary btn-sm">Ver Preços</button>
            <div class="clear"></div>

            <h5 class="juros">*Para parcelamento em 3x será adicionado juros de 5%*</h5>
            <h5 class="juros">*Para parcelamento em 6x será adicionado juros de 12%*</h5>

            <button id="botaogerar" type="button" class="btn btn-primary">Gerar Carnê</button>
            <div class="clear"></div>

            <div class="carne">
                <h3 id="apple">
                    <img src="../img/apple.png" alt="logo Apple"> Carnê Apple</h3>
                <hr>
                <h3 id="carne"></h3>
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


    <script src="../js/script-q2.js"></script>

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