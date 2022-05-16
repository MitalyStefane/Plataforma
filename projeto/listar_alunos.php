<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Alunos</title>
    <link rel="stylesheet" href="css/bootstrap.css" >
</head>
<body>
 
  <div class="container" style="margin-top: 40px">
    <div style="text-align: right">
    <a href="menu.php" role="button" class="btn btn-sm btn-primary"> Voltar </a>
    </div>
    <h3>Lista de Alunos</h3>
    <br>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Email</th>
          <th scope="col"> Ação </th>
        </tr>
      </thead>

        <?php
          include 'conexao.php';
          $sql = "SELECT * FROM `aluno`";
          $busca = mysqli_query($conexao, $sql);

          while ($array = mysqli_fetch_array($busca)) {
             $id_aluno = $array['id_aluno'];
             $nome = $array['nome'];
             $email = $array['email'];
           ?>
        <tr>
          <td> <?php echo $nome ?> </td>
          <td> <?php echo $email ?> </td>
          <td><a class="btn btn-warning" href="editar_aluno.php?id=<?php echo $id_aluno ?>" button type="button" class="btn btn-link">Editar</a>
          <a class="btn btn-danger" href="deletar_aluno.php?id=<?php echo $id_aluno ?>" button type="button" class="btn btn-link">Excluir</a></td>
          
        </tr>
      <?php } ?>  
</table>
</div>    
    

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>