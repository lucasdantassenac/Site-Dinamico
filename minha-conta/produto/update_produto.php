<?php

    include "../adm/conexao.php";
    include "../adm/seguranca.php";


    if(isset($_POST['id'])){
        //entrada - recebe os dados
        $id = trim($_POST['id']);
        $descricao = trim($_POST['descricao']);
        $preco = trim($_POST['preco']);

        //processamento - incluir no banco de dados
        $sql = "update produto set descricao = '$descricao', preco = '$preco' where id = '$id'";
        $alterar = mysqli_query($conexao,$sql);

        //saída - feedbak ao usuario
        if($alterar){
            echo "
                <script>
                    alert('Produto atualizado com sucesso!');
                    window.location = 'listar_produto.php';
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