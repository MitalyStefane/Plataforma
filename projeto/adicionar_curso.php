<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos Online </title>
    <link rel="stylesheet" href="css/bootstrap.css" >

    <style type="text/css">

        #botao{
            background-color: #6a5acd;
            color: #ffffff
        }

    </style>
</head>
<body>

    <div class="container" style="margin-top: 40px; width:500px">

        <div style="text-align: right">
            <a href="menu.php" role="button" class="btn btn-sm btn-primary"> Voltar </a>
        </div>
        <h4 style="text-align:center";>Cadastro de Cursos</h4>
        <form action="cadastrar_curso.php" method="post" style="margin-top:20px">
            <div class="mb-3">
                <label>Curso</label>
                <input type="nome" class="form-control" name="nome" placeholder="Digite o nome do curso" autocomplete="off" required>
            </div>
            <div style="text-align:right">
                <button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
            </div>
        </form>
    </div>    


<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>