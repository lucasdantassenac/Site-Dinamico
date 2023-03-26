<?php

    include '../../includes/conexao.php'; 
    include "../adm/seguranca.php";


    if(isset($_POST['id'])){
        //entrada - recebe os dados
        $id = trim($_POST['id']);
        $nome = trim($_POST['nome']);
        $email = trim($_POST['email']);

        //processamento - incluir no banco de dados
        $sql = "update usuario set nome = '$nome', email = '$email' where id_usuario = '$id'";
        $alterar = mysqli_query($conexao,$sql);

        //saída - feedbak ao usuario
        if($alterar){
            echo "
                <script>
                    alert('Usuario atualizado com sucesso!');
                    history.back();
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