<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>


<h1 class="page-header text-start">Cadastrar Usuários</h1>

<form method="POST" action="cadastrar_action.php" class="input-group input-group-sm mb-8">


  <span class="input-group-text" id="inputGroup-sizing-sm">Nome</span>
  <input type="text" name="nome" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">

  <span class="input-group-text" id="inputGroup-sizing-sm">E-mail</span>
  <input type="email" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">

  <input type="submit" value="Salvar" class="btn btn-success"/>
</form>
