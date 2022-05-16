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

        <h4 style="text-align:center";> Tela de login</h4>
        <form action="menu.php" method="post" style="margin-top:20px">
            <div class="mb-3">
                <label>Usuário</label>
                <input type="nome" class="form-control" name="usuario" placeholder="Usuario" autocomplete="off" required>
            </div>
            <div class="mb-3">
                <label>Senha</label>
                <input type="password" class="form-control" name="senha" placeholder="Senha" autocomplete="off" required>
            </div>
            <div style="text-align: right;">
                <button type="submit" id="botao" class="btn btn">Login</button>
            </div>    
        </form>
</div>



<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>