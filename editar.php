<?php
require 'config.php';

$usuario = [];
$id = filter_input(INPUT_GET, 'id');
if($id){
    $sql = $pdo->prepare("SELECT * FROM usuario WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0){
        $usuario = $sql->fetch(PDO::FETCH_ASSOC);
    }else{
        header("Location: index.php");
        exit;
    }
}else{
     header("Location: index.php");
     
    
   
}

?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<h1 class="page-header text-start">Editar Usuários</h1>

<form method="POST" action="editar_action.php" class="input-group input-group-sm mb-8">
    <input type="hidden" name="id" value="<?=$usuario['id'];?>"/>  

    <span class="input-group-text" id="inputGroup-sizing-sm">Nome</span>
    <input type="text" name="nome" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?=$usuario['nome'];?>">

    <span class="input-group-text" id="inputGroup-sizing-sm">E-mail</span>
    <input type="email" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?=$usuario['email'];?>">

    <input type="submit" class="btn btn-success" value="Atualizar"/>
</form>
