<?php
    include "../adm/conexao.php";
    include "../adm/seguranca_adm.php";


    if(isset($_GET['id'])){
        //entrada - recebe os dados
        $id = $_GET['id'];

        //processamento - escreve e executa a sql
        $sql = "delete from produto where id = '$id'";
        $excluir = mysqli_query($conexao,$sql);

        //saída - dá o feedbeck ao usuário
        if($excluir){
            echo "
                <script>
                    alert('Produto excluido com Sucesso! ');
                    window.location = 'listar_produto.php';
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