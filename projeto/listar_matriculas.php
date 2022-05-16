<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Matrículas</title>
    <link rel="stylesheet" href="css/bootstrap.css" >
</head>
<body>
 
  <div class="container" style="margin-top: 40px">
    <div style="text-align: right">
    <a href="menu.php" role="button" class="btn btn-sm btn-primary"> Voltar </a>
    </div>
    <h3>Lista de Matrículas</h3>
    <br>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Matrícula</th>
          <th scope="col">Aluno</th>
          <th scope="col"> Curso </th>
        </tr>
      </thead>

        <?php
          include 'conexao.php';
          $sql = "SELECT * FROM `matriculas`";
          $busca = mysqli_query($conexao, $sql);

          while ($array = mysqli_fetch_array($busca)) {
             $id_matricula = $array['id_matriculas'];
             $matricula = $array['num_matricula'];
             $aluno = $array['aluno'];
             $curso = $array['curso'];
           ?>
        <tr>
          <td> <?php echo $matricula ?> </td>
          <td> <?php echo $aluno ?> </td>
          <td> <?php echo $curso ?> </td>
          
          <td><a class="btn btn-warning" href="editar_matricula.php?id=<?php echo $id_matricula ?>" button type="button" class="btn btn-link">Editar</a>
          <a class="btn btn-danger" href="deletar_matricula.php?id=<?php echo $id_matricula ?>" button type="button" class="btn btn-link">Excluir</a></td>
          
        </tr>
      <?php } ?>  
</table>
</div>    
    

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>