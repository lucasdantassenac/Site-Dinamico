<?php
    include '../../includes/conexao.php';
    if(!isset($_SESSION['email'])){
        session_start();
    }

    if(!isset($_SESSION['email'])){
        echo "
            <script>
                alert('Área restrita a usuários logados.
                Informe o seu Login e Senha.');
                window.location= '../adm/login.php';
            </script>    
        ";
    }


?>