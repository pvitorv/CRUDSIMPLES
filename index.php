<?php
require 'config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM USUARIO");
if($sql->rowCount() > 0){
    $lista = $sql->fetchALL(PDO::FETCH_ASSOC);
}
?>


<!--<!DOCTYPE html>
<html lang="pt-br">-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>CRUD PDO PHP</title>
</head>
<body>
       <div class="conatainer">
       <!--<div class="row justify-content-md-center">-->
        <h1 class="page-header text-center">Listagem de Usuários</h1>
        <div class="row justify-content-sm-center">
            <div class="col col-sm-10 ">
                <button type="button" class="btn btn-light">
                    <a href="cadastrar.php" class="btn btn-success btn-md"> Cadastrar </a>
                </button>
                <table class="table table-borderd table-striped" style="margin-top:20px;">
                    <thead>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Ações</th>
                    </thead>
                    <?php foreach ($lista as $usuario ):?>
                    <tr>
                    <td><?=$usuario['id'];?></td> 
                    <td><?=$usuario['nome'];?></td> 
                    <td><?=$usuario['email'];?></td> 
                    <td>
                        <a href="editar.php?id=<?=$usuario['id'];?>" class="btn btn-success btn-sm">Editar</a>
                        <a href="excluir.php?id=<?=$usuario['id'];?>" class="btn btn-danger btn-sm">Excluir</a>
                    </td> 
                    </tr>
                <?php endforeach; ?> 
                </table>
            </div>
              
        </div>
    </div>
   
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>