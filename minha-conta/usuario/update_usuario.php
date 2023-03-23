<?php

    include "../adm/conexao.php";
    include "../adm/seguranca.php";


    if(isset($_POST['login'])){
        //entrada - recebe os dados
        $login = trim($_POST['login']);
        $nome = trim($_POST['nome']);
        $email = trim($_POST['email']);

        //processamento - incluir no banco de dados
        $sql = "update usuario set nome = '$nome', email = '$email' where login = '$login'";
        $alterar = mysqli_query($conexao,$sql);

        //saída - feedbak ao usuario
        if($alterar){
            echo "
                <script>
                    alert('Usuario atualizado com sucesso!');
                    window.location = 'listar_usuario.php';
                </script>
            ";
        }
        else{
            echo"
                <p> Sistema temporariamente fora do ar. Tente novamente mais tarde </p>
                <p> Entre em contato com o administrador do sistema </p>
            
            ";
            echo mysqli_error($conexao);
        }
    }
?>