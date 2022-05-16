<?php 

include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "UPDATE `aluno` SET `nome`='$nome',`email`='$email' WHERE id_aluno = $id";

$atualizar = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="css/bootstrap.css" >
<div class="container" style="width:400px">
    <center>
        <h3> Atualizado com sucesso</h3>
        <div style="margin-top: 10px">
            <a href="listar_alunos.php" class="btn btn-sm btn-primary" style="color:#fff"> Voltar </a>
    </center>        
        </div>    
</div>


