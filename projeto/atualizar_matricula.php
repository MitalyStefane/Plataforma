<?php 

include 'conexao.php';

$id = $_POST['id'];
$matricula = $_POST['num_matricula'];
$aluno = $_POST['aluno'];
$curso = $_POST['curso'];

$sql = "UPDATE `matriculas` SET `num_matricula`='$matricula',`aluno`='$aluno',`curso`='$curso'  WHERE id_aluno = $id";

$atualizar = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="css/bootstrap.css" >
<div class="container" style="width:400px">
    <center>
        <h3> Atualizado com sucesso</h3>
        <div style="margin-top: 10px">
            <a href="listar_matriculas.php" class="btn btn-sm btn-primary" style="color:#fff"> Voltar </a>
    </center>        
        </div>    
</div>


