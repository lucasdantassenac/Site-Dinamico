<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastro </title>
    <link rel="stylesheet" href="./css/cadastro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <?php include './includes/header.php';?>
    <form class="row g-3">
        <div class="col-md-6">
          <label for="nome" class="form-label"></label>
          <input class=" nome " type="nome" class="form-control" id="nome" placeholder=" Nome completo*">
        </div>
        <div class="col-md-6">
          <label for="cpf" class="form-label"></label>
          <input class="cpf" type="password" class="form-control" id="cpf" placeholder=" CPF*">
        </div>
        <div class="col-12">
          <label for="data" class="form-label"></label>
          <input class="data" type="text" class="form-control" id="data" placeholder=" Data de nascimento*">
        </div>
        <div class="col-12">
          <label for="telefone" class="form-label"></label>
          <input class="tel" type="tel" class="form-control" id="telefone" placeholder=" Telefone celular*">
        </div>
        <div class="col-md-6">
          <label for="mail" class="form-label"></label>
          <input class="mail" type="mail" class="form-control" id="mail" placeholder=" Email*">
        </div>
        <div class="col-md-6">
          <label for="Senha" class="form-label"></label>
          <input class="criesenha" type="senha" class="form-control" id="senha" placeholder=" Crie sua senha*">
        </div>
        <div class="col-md-6">
          <label for="ConfirmeSenha" class="form-label"></label>
          <input class="confirmesenha" type="confirmesenha" class="form-control" id="confirmesenha" placeholder=" Confirme sua senha*">
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary" id="continuar">Continuar</button>
        </div>
      </form>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>