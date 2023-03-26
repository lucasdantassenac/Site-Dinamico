<?php 
$styles = array(
  0 => 'global.css',
  1 => 'header.css',
  2 => 'rodape.css',
);
include './head.php';
if(!ISSET($_SESSION)){
  SESSION_START();
  if(ISSET($_SESSION['email'])) header('location:minha-conta');
}
?>
  <body >
    <?php include './includes/header.php' ; ?>
    <section class='p-4 pt-0' >
    <!-- Pills navs -->
      <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="./login.php#pills-login" role="tab"
            aria-controls="pills-login" aria-selected="true">Login</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="./cadastro.php#pills-register" role="tab"
            aria-controls="pills-register" aria-selected="false">Register</a>
        </li>
      </ul>
      <!-- Pills navs -->

      <!-- Pills content -->
      <div class="tab-content">
        <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
          <form action='./includes/verify_login.php' method='post'>
            <div class="text-center mb-3">
              <p>Faça login</p>
            </div>
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="loginName" name='email'class="form-control" />
              <label class="form-label" for="loginName">E-mail</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" id="loginPassword" name='senha' class="form-control" />
              <label class="form-label" for="loginPassword">Senha</label>
            </div>

            <!-- 2 column grid layout -->
            <div class="row mb-4">
              <div class="col-md-6 d-flex justify-content-center">
                <!-- Checkbox -->
                <div class="form-check mb-3 mb-md-0">
                  <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                  <label class="form-check-label" for="loginCheck"> Lembrar-me</label>
                </div>
              </div>

              <div class="col-md-6 d-flex justify-content-center">
                <!-- Simple link -->
                <a href="#!">Esqueceu sua senha?</a>
              </div>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Entrar</button>

            <!-- Register buttons -->
            <div class="text-center">
              <p>Não tem conta? <a href="./cadastro.php">Cadastro</a></p>
            </div>
          </form>
        </div>
        <div class="tab-pane fade" id="pills-register" role="tabpane1" aria-labelledby="tab-register">
          <form>
            <div class="text-center mb-3">
              <p>Faça login com</p>
            </div>

            <!-- Name input -->
            <div class="form-outline mb-4">
              <input type="text" id="registerName" class="form-control" />
              <label class="form-label" for="registerName">Nome</label>
            </div>

            <!-- Username input -->
            <div class="form-outline mb-4">
              <input type="text" id="registerUsername" class="form-control" />
              <label class="form-label" for="registerUsername">Usuário</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="registerEmail" class="form-control" />
              <label class="form-label" for="registerEmail">E-mail</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" id="registerPassword" class="form-control" />
              <label class="form-label" for="registerPassword">Senha</label>
            </div>

            <!-- Repeat Password input -->
            <div class="form-outline mb-4">
              <input type="password" id="registerRepeatPassword" class="form-control" />
              <label class="form-label" for="registerRepeatPassword">Confirme sua senha</label>
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-center mb-4">
              <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked
                aria-describedby="registerCheckHelpText" />
              <label class="form-check-label" for="registerCheck">
                Li e concordo com os termos de uso
              </label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-3">Inscrever </button>
          </form>
        </div>
      </div>
      <!-- Pills content -->
    </section>
      
 <?php include './includes/rodape.php'; ?>