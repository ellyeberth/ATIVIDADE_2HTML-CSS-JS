<?php 

    define('HOST','localhost');
	define('DB','mercantil');
	define('USER','root');
	define('PASS','');

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
    <title>Mercantil</title>
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
        $preco = $_POST['preco'];

        $sqlAdd = $pdo->prepare("INSERT INTO produtos VALUE(null,?,?)");
        $sqlAdd->execute(array($nome,$preco));
    }

    ?>


    <div class="esq">
        <h2>Insira o Produto</h2>

        <form method="post">

            <div class="input-group mb-3">
                <span class="input-group-text">Nome do produto</span>
                <input name="nome" type="text" class="form-control">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Preço</span>
                <input name="preco" type="text" class="form-control">
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