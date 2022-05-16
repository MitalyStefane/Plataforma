<?php 
 
 include 'conexao.php';

 echo $id = $_GET ['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos Online </title>
    <link rel="stylesheet" href="css/bootstrap.css" >

    <style type="text/css">

        #tamanhoContainer{
            width: 500px;
        }

        #botao{
            background-color: #6a5acd;
            color: #ffffff
        }

    </style>
</head>
<body>

    <div class="container" id="tamanhoContainer" style="margin-top: 40px">   
        <h4 style="text-align:center";> Atualizar cadastro </h4>
        <form action="atualizar_matricula.php" method="post" style="margin-top:20px">
            <?php

            $sql = "SELECT * FROM `matriculas` WHERE id_matriculas = $id";
            $buscar = mysqli_query($conexao, $sql);
            while ($array = mysqli_fetch_array($buscar)) {
                $id_matricula = $array['id_matriculas'];
                $matricula = $array['num_matricula'];
                $aluno = $array['aluno'];
                $curso = $array['curso'];
            

            ?>
            <div class="mb-3">
                <label>Matricula</label>
                <input type="number" class="form-control" name="num_matricula">
                <input type="number" class="form-control" name="id" value="<?php echo $id?>" style="display:none">
            </div>
            <div class="mb-3">
                <label>Aluno</label>
                <input type="nome" class="form-control" name="aluno">
            </div>
            <div class="mb-3">
                <label>Curso</label>
                <input type="nome" class="form-control" name="curso">
            </div>
            
            <div style="text-align: center;">
                <button type="submit" id="botao" class="btn btn">Atualizar</button>
            </div>    
        <?php } ?>    
    </div>
</form>


<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>