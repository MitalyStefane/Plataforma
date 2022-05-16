<?php

include 'conexao.php';

$curso = $_POST['nome']; //Recebe o valor do atributo 

$sql = "INSERT INTO `curso`(`nome`) VALUES ('$curso')";
$inserir = mysqli_query($conexao, $sql);

?>
<link rel="stylesheet" href="css/bootstrap.css" >
<div class="container" style="width:400px">
    <center>
        <h3> Adicionado com Sucesso </h3>
        <div style="margin-top: 10px">
            <a href="adicionar_curso.php" class="btn btn-sm btn-primary" style="color:#fff"> Voltar </a>
    </center>        
        </div>    
</div>
