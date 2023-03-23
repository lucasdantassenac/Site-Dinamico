<?php

  
include "../adm/conexao.php";
include "../adm/controle.php";
include "../adm/seguranca.php";

if(isset($_GET['login'])){
    //entrada - recebe os dados
    $login = $_GET['login'];

    //processamento - escreve e executa a sql
    $sql = "select * from usuario where login = '$login'";
    $seleciona = mysqli_query($conexao,$sql);
    $exibe = mysqli_fetch_array($seleciona);

    $nome = $exibe['nome'];
    $login = $exibe['login'];
    $email = $exibe['email'];

?>



        <h1 class='text-center'>Alterar Usuário </h1>
        <hr>
        <form name="cadastro" method="post" action="update_usuario.php">
         <input type="hidden" name="login" value="<?php echo $login ?>">   
        
        <div class="mb-3">
            <label for="login" class="form-label">Login</label>
            <input class="text" id="form-control" id="login" name="login" placeholder="Login" value="<?php echo $login ?>" required disabled>
        </div>

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input class="text" id="form-control" id="nome" name="nome" placeholder="Nome Completo" value="<?php echo $nome ?>" required>
        </div>
                
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="email@provedor.com" value="<?php echo $email ?>">
        </div>

        <hr class="mt-5 mb-4">
        <div class="text-end">
            <button type="button" class="btn btn-secondary" onclick="history.go(-1)">Voltar</button>
            <button type="submit" class="btn btn-primary">Alterar</button>
        </div>
        </form>
  

<?php
  
    }
    else{
        echo "
        <p> Esta é uma página de tratamento de dados. </p>
        <p> Clique <a href='listar_usuario.php'> aqui </a> para selecionar o usuario que deseja viaualizar. </p>
        ";
    }


include "../adm/rodape.php";
?>