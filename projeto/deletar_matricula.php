<?php
include 'conexao.php';
$id = $_GET['id'];

$sql = "DELETE FROM `matriculas` WHERE id_matriculas = $id";
$deletar = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="css/bootstrap.css" >
<div class="container" style="width:400px">
    <center>
        <h3> Deletado com sucesso </h3>
        <div style="margin-top: 10px">
            <a href="listar_matriculas.php" class="btn btn-sm btn-warning" style="color:#fff"> Voltar </a>
        </div>
    </center>
</div>   