<?php

include 'conexao.php';

$matricula = $_POST['num_matricula']; //Recebe o valor do atributo 
$aluno = $_POST['aluno']; //Recebe o valor do atributo 
$curso = $_POST['curso']; // Recebe o valor do atributo

$sql = "INSERT INTO `matriculas`(`num_matricula`, `aluno`, `curso`) VALUES ('$matricula', '$aluno', '$curso')";
$inserir = mysqli_query($conexao, $sql);

?>
<link rel="stylesheet" href="css/bootstrap.css" >
<div class="container" style="width:400px">
    <center>
        <h3> Adicionado com Sucesso </h3>
        <div style="margin-top: 10px">
            <a href="adicionar_matricula.php" class="btn btn-sm btn-primary" style="color:#fff"> Voltar </a>
    </center>        
        </div>    
</div>



