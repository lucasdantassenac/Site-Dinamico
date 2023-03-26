<?php

   // Define o caminho para a pasta includes
  $include_path = 'C:\xampp\htdocs\cariocatech\includes';

  // Define o novo include_path
  set_include_path(get_include_path() . PATH_SEPARATOR . $include_path);

  // Inclui o arquivo conexao.php
  include 'conexao.php';

    if(isset($_POST['nome'])){
        //Entrada - coletar os dados do formulário
        $nome = trim($_POST['nome']);
        $email = trim($_POST['email']);
        $senha = trim($_POST['senha']);
        $repetirsenha = trim($_POST['repetirsenha']);
        $nivel = 'usu';
        if(ISSET($_POST['nivel'])) $nivel = trim($_POST['nivel']); 

        //verificar se o login já existe
        $sql = "select * from usuario where email = '$email'";
        $teste_login = mysqli_query($conexao,$sql);
        $existe = mysqli_num_rows($teste_login);

        if($existe){
            echo "
                <script>
                    alert('E-mail já cadastrado!.');
                    history.back();
                </script>
            ";
        }elseif($senha != $repetirsenha){
            echo "
                <script>

                alert('As senhas não coincidem!');
                history.back();
                
                
                </script>
            ";
        }else{
            $hash = password_hash($senha,PASSWORD_DEFAULT);  
            //Processamento - inserir no banco de dados
            $sql = "insert into usuario(nome,email,senha,nivel) values ('$nome','$email','$hash','$nivel')";
            $incluir = mysqli_query($conexao,$sql);

            //saída - feedback ao usuário
            if($incluir){
                echo "
                    <script>
                        alert('Usuário cadastrado com sucesso!');
                        window.location = '../../login.php';
                    </script>
                ";
            }else{ //tratamento de erro e redirecinamento
                echo "<p> Banco de Dados temporariamente fora do ar. Entre em contato com o administrador do site para reportar o problema.</p>";
                echo "<p> Clique <a href='usuario.php'> aqui </a> para retornar ao formulário de cadastro. </p> ";            
            }
        }
    }else{ //tratamento de erro e redirecionamento        
        echo "<p> Esta é uma página de tratamento de dados </p>";
        echo "<p> Clique <a href='usuario.php'> aqui </a> para acessar o formulário de Cadastro. </p> ";
    }


?>