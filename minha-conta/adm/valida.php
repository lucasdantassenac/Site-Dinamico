<?php
    include "../adm/conexao.php";
    if(isset($_POST['login'])){
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        $sql = "select * from usuario where login = '$login'";
        $teste_login = mysqli_query($conexao,$sql);
        $existe = mysqli_num_rows($teste_login);

        if($existe){
            $dados = mysqli_fetch_array($teste_login);
            $hash = $dados['senha'];

            if(password_verify($senha,$hash)){
                //validado     
                if(!isset($_SESSION)){
                    session_start(); //iniciando a sessão
                }
                $_SESSION['login'] = $dados['login'];
                $_SESSION['nome'] = $dados['nome'];
                $_SESSION['nivel'] = $dados['nivel'];

                if($dados['nivel'] == 'adm'){
                    header('location: ../adm/adm.php');
                }
                else{
                    header('location: ../adm/index.php');
                }
            }
            else{
                echo "Usuário ou senha inválido";
            }
        }
        else{
            echo "Usuário ou senha inválido";
        }
    }

?>