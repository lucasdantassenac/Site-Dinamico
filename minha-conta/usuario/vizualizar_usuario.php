<?php

    include '../../includes/conexao.php';
    include "../adm/seguranca.php";
   
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
        $senha = $exibe['senha'];
        $email = $exibe['email'];
    


?>





    <div class="container bg-info p-3 mt-5">
        <div class=" text-end">
            <a href="listar_usuario.php">
                <button class="btn btn-success btn-sm"> Listar Usuário </button>
            </a>
        </div>

        <h2> Usuário: <?php echo $exibe['nome'] ?> </h2>
        <hr>

        <div class="container text-start bg-gradient p-3">
            <?php
                echo "
            <p> Nome completo: $nome </p>
            <p> Senha: **** </p>
            <p> Email: $email </p>
            ";
            ?>
            
        </div>

        <div class="row">
            <div class="col text-start">
                
                    <button class="btn btn-secondary btn-sm" onclick="history.go(-1)"> Voltar </button>
                
            </div>
            <div class="col text-center">
                <a href='alterar_usuario.php?id=<?php echo $id ?>'>
                    <button class="btn btn-warning btn-sm"> Alterar Senha  </button>
                </a>
            </div>
            <div class="col text-end">
                <a href='alterar_usuario.php?id=<?php echo $id ?>'>
                    <button class="btn btn-primary btn-sm"> Editar Dados</button>
                </a>
            </div>
        </div>
    </div>

 

<?php

    }
    else{
        echo "
        <p> Esta é uma oágina de tratamento de dados. </p>
        <p> Clique <a href='listar_usuario.php'> aqui </a> para selecionar o usuario que deseja viaualizar. </p>
        ";
    }

    include '../../includes/rodape.php';
?>