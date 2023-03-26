<?php

  
 // Define o caminho para a pasta includes
 $include_path = 'C:\xampp\htdocs\cariocatech\includes';

 // Define o novo include_path
 set_include_path(get_include_path() . PATH_SEPARATOR . $include_path);

 // Inclui o arquivo conexao.php
 include 'conexao.php';



$styles = array(
    0 => 'global.css',
    1 => 'header.css',
    2 => 'rodape.css',
    );
    include '../../head.php';

if(isset($_GET['id_usuario'])){
    //entrada - recebe os dados
    $id = $_GET['id_usuario'];

    //processamento - escreve e executa a sql
    $sql = "select * from usuario where id_usuario = '$id'";
    $seleciona = mysqli_query($conexao,$sql);
    $exibe = mysqli_fetch_array($seleciona);

    $nome = $exibe['nome'];
    $id = $exibe['id_usuario'];
    $email = $exibe['email'];

?>



        <h1 class='text-center'>Alterar Usuário </h1>
        <hr>
        <div>
        <form name="cadastro" method="post" action="update_usuario.php">
         <input type="hidden" name="id" value="<?php echo $id ?>">   
        
        <div class="mb-3">
            <label for="login" class="form-label">Id</label>
            <input class="text" id="form-control" id="id" name="id" placeholder="id" value="<?php echo $id ?>" required readonly>
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
        </div>
  

<?php
  
    }
    else{
        echo "
        <p> Esta é uma página de tratamento de dados. </p>
        <p> Clique <a href='listar_usuario.php'> aqui </a> para selecionar o usuario que deseja viaualizar. </p>
        ";
    }


    include '../../includes/rodape.php';
?>