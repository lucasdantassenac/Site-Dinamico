<?php
$styles = array(
  0 => 'global.css',
  #1 => 'minha-conta.css',
  2 => 'header.css',
  3 => 'rodape.css',
);
include '../head.php';
if (!ISSET($_SESSION)){
  SESSION_START();
}
if(ISSET($_SESSION['email'])){
  require_once '../includes/conexao.php';
  $email = $_SESSION['email'];
  $sql = "SELECT * FROM usuario WHERE email = '$email';";
  $query = mysqli_query($conexao, $sql);
  $query = mysqli_fetch_array($query);
}else {
  header('location:../login.php');
}
?>
<body>
    <?php 
        include '../includes/header.php';
    ?>
<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/cariocatech/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Minha conta</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="/cariocatech/img/logo.png" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3"><?= $query['nome'] ?></h5>
            <?php 
              if($_SESSION['nivel'] === 'adm'){
            ?>
            <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-primary">Follow</button>
              <button type="button" class="btn btn-outline-primary ms-1">Message</button>
            </div>
            <?php } ?>
          </div>
          <div class="card-body">
            <hr>
            <div class="row">
              <div class="col-sm-12 text-center">
                <a class="mb-0" href='../includes/sair.php'>Sair</a>
              </div>
            </div>
          </div>
        </div>      
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Nome completo</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= $query['nome'] ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">E-mail</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= $query['email'] ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= $query['celular'] ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Endereço</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= $query['endereco'] ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>