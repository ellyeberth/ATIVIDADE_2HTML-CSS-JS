<?php 

$listar = $pdo->prepare("SELECT * FROM produtos");
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
            <span class="input-group-text">Nome do produto</span>
            <input name="nomeEditar" type="text" class="form-control" value="<?php echo $valueListar['nome'];  ?>">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Preço do produto</span>
            <input name="precoEditar" type="text" class="form-control" value="<?php echo $valueListar['preco'];  ?>">
        </div>

        <div class="botoes">
            <input type="submit" name="editar_<?php echo $valueListar['id']; ?>" value="Salvar edição"
                class="btn btn-primary">
            <input type="submit" name="excluir_<?php echo $valueListar['id']; ?>" value="Excluir"
                class="btn btn-danger">
        </div>

    </form>

</div>

<?php
}
?>