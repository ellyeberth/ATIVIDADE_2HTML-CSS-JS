<?php 

$listar = $pdo->prepare("SELECT * FROM alunos");
$listar ->execute();
$resultadoListar = $listar->fetchAll();

foreach($resultadoListar as $keyListar => $valueListar){  
    
    if(isset($_POST['editar_'.$valueListar['id']])){
        $nomeEditar = $_POST['nomeEditar'];
        $precoEditar = $_POST['precoEditar'];

        $id = $valueListar['id'];

        $sqlEditar = $pdo ->prepare("UPDATE produtos set nome=?, preco=? WHERE id=$id");
        $sqlEditar->execute(array($nomeEditar, $precoEditar));
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0'>";
    }

    if(isset($_POST['excluir_'.$valueListar['id']])){
        $nomeExcluir = $_POST['nomeEditar'];
        $precoExcluir = $_POST['precoEditar'];

        $id = $valueListar['id'];

        $sqlEditar = $pdo ->prepare("DELETE FROM produtos WHERE id=?");
        $sqlEditar->execute(array($id));
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0'>";
    }
    
    ?>

<div class="box">

    <form method="post">
        <div class="input-group mb-3">
            <span class="input-group-text">Nome</span>
            <input type="text" class="form-control" value="<?php echo $valueListar['aluno'];  ?>">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Disciplina</span>
            <input type="text" class="form-control" value="<?php echo $valueListar['disciplina'];  ?>">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Nota 1</span>
            <input type="text" class="form-control" value="<?php echo $valueListar['nota1'];  ?>">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Nota 2</span>
            <input type="text" class="form-control" value="<?php echo $valueListar['nota2'];  ?>">
        </div>

        <div class="cadastrado">
            <h2><center>Aluno Inserido!</center></h2>
        <div>
    </form>



</div>

<?php
}
?>