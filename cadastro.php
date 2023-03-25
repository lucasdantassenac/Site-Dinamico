<?php 
$styles = array(
  0 => 'global.css',
  1 => 'cadastro.css',
  2 => 'header.css',
  3 => 'rodape.css',
);
include './head.php';

?>
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
  <?php include './includes/rodape.php'; ?>