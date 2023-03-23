<?php

include "../adm/conexao.php";
include "../adm/controle.php";

if(isset($_POST['nome'])){
    //coletar os dados do formulário
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $login = trim($_POST['login']);
    $senha = trim($_POST['senha']);
    $nivel = 'usu';

    $hash = password_hash($senha,PASSWORD_DEFAULT);

    //verificar se o login já existe
    $sql = "select * from usuario where login ='$login'";
    $teste_login = mysqli_query($conexao,$sql);
    $existe = mysqli_num_rows($teste_login);
    if($existe){
        echo "
        <script>
            alert('Login já cadastrado. Tente outro login');
            history.back();
        </script>    
        ";

    }
    else{
             //Processamento - inserir no banco de dados
            $sql = "insert into usuario(nome,email,login,senha,nivel) values ('$nome','$email','$login','$hash','$nivel')";
            $incluir = mysqli_query($conexao,$sql);


            //saída - feedbak ao usuário
            if($incluir){
            echo "
                <script>
                    alert('Usuário cadastrado com sucesso!');
                    window.location = 'listar_usuario.php';
                </script>
            ";
            } 
            else{ //tratamento de erro e redirecionamento
            echo "<p> Banco de Dados temporariamente fora do ar. Entre em contato com o administrador do site para reportar o problema. </p>";
            echo "<p> Clique <a href='usuario.php'> aqui </a> para retornar ao formulário de cadastro. </p>";
        }
    }
         

        }else{ //tratamento de erro e redirecionamento
            echo "<p> Esta é uma página de tratamento de dados </p>";
            echo "<p> Clique <a href='usuario.php'> aqui </a> para acessar o formulário de Cadastro. </a> ";
        }

include "../adm/rodape.php"
?>