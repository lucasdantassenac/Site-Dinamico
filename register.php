<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastro </title>
    <!--icons-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!--boostrpap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <!--custom css-->
    <!-- <link rel="stylesheet" href="./css/cadastro.css"> -->
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/header.css">
</head>
<body class=''>
  <?php include './includes/header.php';?>
  <section class='d-flex flex-column align-items-center'>
    <form class="row g-3 m-4 container">
      <div class="col-md-6">
        <input type="text" class="form-control" id="nome_field" placeholder='nome'>
      </div>
      <div class="col-md-6">
        <input type="number" class="form-control" id="cpf_field" placeholder='CPF'>
      </div>
      <div class="col-md-6">
        <input type="date" class="form-control" id="inputAddress" placeholder="Data de nascimento">
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" id="telefone_field" placeholder="Telefone">
      </div>
      <div class="col-12">
        <input type="email" class="form-control" id="email_field" placeholder='E-mail'>
      </div>
      <div class="col-md-6">
        <input type="password" class="form-control" id="senha_field" placeholder='Senha'>
      </div>
      <div class="col-md-6">
        <input type="password" class="form-control" id="confirmar_senha_field" placeholder='Confirme sua senha'>
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Check me out
          </label>
        </div>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Sign in</button>
      </div>
    </form>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>