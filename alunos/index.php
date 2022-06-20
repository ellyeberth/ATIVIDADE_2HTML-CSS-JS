<?php 

    define('HOST','sql312.epizy.com');
	define('DB','epiz_28487967_aluno');
	define('USER','epiz_28487967');
	define('PASS','0DpiMDcv5d');

	try{
		$pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//echo "Conectado com sucesso";
	}catch(Exception $erro){
		echo 'Erro ao conectar';
	}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1 - WEB</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</head>

<body>

    <?php 

    if(isset($_POST['adicionar'])){
        $nome = $_POST['nome'];
        $disciplina = $_POST['disciplina'];
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];

        $sqlAdd = $pdo->prepare("INSERT INTO alunos VALUE(null,?,?,?,?)");
        $sqlAdd->execute(array($nome,$disciplina, $nota1,$nota2));
    }

    ?>


    <div class="esq">
        <h2>Insira o Aluno</h2>

        <form method="post">

            <div class="input-group mb-3">
                <span class="input-group-text">Aluno</span>
                <input name="nome" type="text" class="form-control">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Disciplina</span>
                <input name="disciplina" type="text" class="form-control">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Nota 1</span>
                <input name="nota1" type="text" class="form-control">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Nota 2</span>
                <input name="nota2" type="text" class="form-control">
            </div>

            <input type="submit" name="adicionar" value="Adicionar" class="btn btn-primary">

        </form>

    </div>

    <div class="dir">

        <?php 
        include('produtos.php');
    ?>

    </div>

    <div class="clear"></div>


</body>

</html>