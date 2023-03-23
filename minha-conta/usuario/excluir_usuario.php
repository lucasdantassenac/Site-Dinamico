<?php
    include "../adm/conexao.php";
    include "../adm/seguranca_adm.php";


    if(isset($_GET['login'])){
        //entrada - recebe os dados
        $login = $_GET['login'];

        //processamento - escreve e executa a sql
        $sql = "delete from usuario where login = '$login'";
        $excluir = mysqli_query($conexao,$sql);

        //saída - dá o feedbeck ao usuário
        if($excluir){
            echo "
                <script>
                    alert('Usuário excluido com Sucesso! ');
                    window.location = 'listar_usuario.php';
                </script>
            ";

            //redirecionador de páginas do php
            //header("location: listar_usuario.php");
        }
        else{
            echo "
                <p> Banco de Dados temporariamente fora do ar. Tente novamente mais tarde </p>
                <p> Entre em contato com o administrador do Site ... </p>
            
            ";
            echo mysqli_error($conexao);


        }
    }
?>