<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Cursos</title>
    <link rel="stylesheet" href="css/bootstrap.css" >
</head>
<body>
 
  <div class="container" style="margin-top: 40px; width:500px">
    <div style="text-align: right">
    <a href="menu.php" role="button" class="btn btn-sm btn-primary"> Voltar </a>
    </div>
    <h3>Lista de Cursos</h3>
    <br>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nome do Curso</th>
        </tr>
      </thead>

        <?php
          include 'conexao.php';
          $sql = "SELECT * FROM `curso`";
          $busca = mysqli_query($conexao, $sql);

          while ($array = mysqli_fetch_array($busca)) {
             $id_curso = $array['id_curso'];
             $nome = $array['nome'];
           ?>
        <tr>
          <td> <?php echo $nome ?> </td>
          <td><a class="btn btn-warning" href="editar_curso.php?id=<?php echo $id_curso ?>" button type="button" class="btn btn-link">Editar</a>
          <a class="btn btn-danger" href="deletar_curso.php?id=<?php echo $id_curso?>" button type="button" class="btn btn-link">Excluir</a></td>
        </tr>
      <?php } ?>  
</table>
</div>    
    

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>