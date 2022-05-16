<?php

include 'conexao.php';

$nome = $_POST['nome']; //Recebe o valor do atributo 
$email = $_POST['email']; //Recebe o valor do atributo


$sql = "INSERT INTO `aluno`(`nome`, `email`) VALUES ('$nome','$email')";
$inserir = mysqli_query($conexao, $sql);

?>
<link rel="stylesheet" href="css/bootstrap.css" >
<div class="container" style="width:400px">
    <center>
        <h3> Cadastrado com Sucesso </h3>
        <div style="margin-top: 10px">
            <a href="menu.php" class="btn btn-sm btn-primary" style="color:#fff"> Voltar </a>
    </center>        
        </div>    
</div>
