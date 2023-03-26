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
  $botoes = 
    "<a href='./?crud=usuarios' class='btn btn-outline-primary'>Usuários</a>
    <a href='./?crud=produtos'class='btn btn-outline-primary ms-1'>Produtos</a>";
  
  
  if(ISSET($_GET['crud'])) {
  $crud = filter_var($_GET['crud'], FILTER_SANITIZE_STRING);
  
    if($crud === 'usuarios'){
      $botoes = 
      "<a href='./?' class='btn btn-outline-primary'>Minha conta</a>
      <a href='./?crud=produtos'class='btn btn-outline-primary ms-1'>Produtos</a>";
    }elseif($crud === 'produtos') {
      $botoes = 
      "<a href='./?crud=usuarios' class='btn btn-outline-primary'>Usuários</a>
      <a href='./?'class='btn btn-outline-primary ms-1'>Minha conta</a>";
    }

  }else{$crud = 0;}
}else {
  header('location:../login.php');
}
?>
<body>
  <?php include '../includes/header.php';?>
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
              <div class='mt-2'><h6>Administre</h6><br></div>
              <div class="d-flex justify-content-center mb-2">
                <!--echo $buttons-->
                <?= $botoes ;?>
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

              <?php if($crud === 0 || $_SESSION['nivel'] !== 'adm'){?>
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
              <?php }elseif($crud === "usuarios" && $_SESSION['nivel'] === 'adm') {?> 
                <div class=" row text-center bg-dark text-light p-2">
                  <div class="col-2">
                  Nome
                  </div>
                  <div class="col-5">
                  Email
                  </div>
                  <div class="col-2">
                  Nível
                  </div>
                  <div class="col-3">
                  Controles
                  </div>
              </div>
              <?php
              $sql = "SELECT * FROM usuario ORDER BY 'nome';";
              $usuarios = mysqli_query($conexao, $sql);
              while($usuario = mysqli_fetch_array($usuarios)){
                $id = $usuario['id_usuario'];?>
                
              <div class=" row text-center  p-2">
                <div class="col-2">
                <?php echo $usuario['nome'] ?>
                </div>
                <div class="col-5">
                <?php echo $usuario['email'] ?>
                </div>
                <div class="col-2">
                <?php echo $usuario['nivel'] ?>
                </div>
                <div class="col-3">
                    <a href="./usuario/vizualizar_usuario.php?id_usuario=<?php echo $id ?>">
                        <span class="material-symbols-outlined"> visibility </span></a> 

                    <a href="./usuario/alterar_usuario.php?id_usuario=<?php echo $id ?>">  
                        <span class="material-symbols-outlined"> edit </span></a> 
                        
                    <a href="./usuario/excluir_usuario.php?id_usuario=<?php echo $id ?>" onclick="return confirm('Confirma a Exclusão do Usuário?')">
                        <span class="material-symbols-outlined"> delete </span></a> 
                </div>
              </div>
              <hr>
              <?php }}elseif($crud === 'produtos' && $_SESSION['nivel'] === 'adm') {?>
                <div class=" row text-center bg-dark text-light p-2">
                  <div class="col-4">
                  Foto
                  </div>
                  <div class="col-3">
                  Nome
                  </div>
                  <div class="col-2">
                  Peço
                  </div>
                  <div class="col-3">
                  Controles
                  </div>
              </div>
              <?php
              $sql = "SELECT * FROM produtos ORDER BY 'nome';";
              $produtos = mysqli_query($conexao, $sql);
              while($produto = mysqli_fetch_array($produtos)){
                $img = $produto['foto']?>
                
              <div class=" row text-center d-flex align-items-center p-4">
                <div class="col-4">
                <?php echo "<img src='../img/$img' alt='Foto do produto' class='w-75'>";?>
                </div>
                <div class="col-3">
                <?php echo $produto['nome'] ?>
                </div>
                <div class="col-2">
                <?php echo $produto['preco'] ?>
                </div>
                <div class="col-3">
                    <a href="vizualizar_usuario.php?login=<?php echo $login ?>">
                        <span class="material-symbols-outlined"> visibility </span></a> 

                    <a href="alterar_usuario.php?login=<?php echo $login ?>">  
                        <span class="material-symbols-outlined"> edit </span></a> 
                        
                    <a href="excluir_usuario.php?login=<?php echo $login ?>" onclick="return confirm('Confirma a Exclusão do Produto?')">
                        <span class="material-symbols-outlined"> delete </span></a> 
                </div>
              </div>
              <hr>
              <?php }} ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>