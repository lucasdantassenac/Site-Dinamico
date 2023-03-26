<?php
    include '../../includes/conexao.php';
    


    if(isset($_GET['id_usuario'])){
        //entrada - recebe os dados
        $id = $_GET['id_usuario'];

        //processamento - escreve e executa a sql
        $sql = "delete from usuario where id_usuario = '$id'";
        $excluir = mysqli_query($conexao,$sql);

        //saída - dá o feedbeck ao usuário
        if($excluir){
            echo "
                <script>
                    alert('Usuário excluido com Sucesso! ');
                    history.back();
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