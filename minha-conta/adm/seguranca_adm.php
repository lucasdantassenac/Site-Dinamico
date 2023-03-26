<?php

    if(!isset($_SESSION['email'])){
        session_start();
    }

    if(!isset($_SESSION['email'])){
        echo "
            <script>
                alert('Área restrita a usuários logados. Informe o seu Login e Senha.');
                window.location= '../adm/login.php';
            </script>    
        ";
    }
    else{
        $nivel = $_SESSION['nivel'];
        $nome = $_SESSION['nome'];
        if($nivel != 'adm'){
            echo "
            <script>
                alert('Área restrita a Administradores.');               
                window.location= '../adm/login.php';
            </script>    
        ";
        }
    }

?>