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
            <p> Login: $login </p>
            <p> Senha: **** </p>
            <p> Email: $email </p>
            ";
            ?>
            
        </div>

        <div class="row">
            <div class="col text-start">
                <a href='listar_usuario.php'>
                    <button class="btn btn-secondary btn-sm"> Voltar </button>
                </a>
            </div>
            <div class="col text-center">
                <a href='alterar_usuario.php?login=<?php echo $login ?>'>
                    <button class="btn btn-warning btn-sm"> Alterar Senha  </button>
                </a>
            </div>
            <div class="col text-end">
                <a href='alterar_usuario.php?login=<?php echo $login ?>'>
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

    include "../adm/rodape.php";
?>