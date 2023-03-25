<?php

include "../adm/conexao.php";

if(isset($_POST['descricao'])){
    //coletar os dados do formulário
    $nome = trim($_POST['nome']);
    $descricao = trim($_POST['descricao']);
    $preco = trim($_POST['preco']);
    $foto = trim($_POST['preco']);

    //recebendo arquivos
    $nomeFoto = $_FILES['foto']['name'];
    $temp = $_FILES['foto']['tmp_name'];
    $caminho = '../produto/fotos/';
    $foto = $caminho . $nomeFoto;

    $foto = $caminho . $nome;
    // upload do arquivo
    $upload = move_uploaded_file($temp,$foto);

    if($upload){
           //Processamento - inserir no banco de dados
            $sql = "insert into produto(nome,descricao,preco,foto) values ('$nome','$descricao','$preco','$foto')";
            $incluir = mysqli_query($conexao,$sql);


            //saída - feedbak ao usuário
            if($incluir){
            echo "
                <script>
                    alert('Produto cadastrado com sucesso!');
                    window.location = 'listar_produto.php';
                </script>
            ";
            } 
            else{ //tratamento de erro e redirecionamento
                echo "<p> Banco de Dados temporariamente fora do ar. Entre em contato com o administrador do site para reportar o problema. </p>";
                echo "<p> Clique <a href='produto.php'> aqui </a> para retornar ao formulário de cadastro. </p>";


            }

    }
            else{
                echo "<p> Não foi possível fazer a upload do arquivo no momento. Tente novamente mais tarde. </p>";
                echo "<p> Entre em contato com o asministrador do site. </p>";
                echo "<p> Clique <a href='produto.php'> aqui </a> para acessar o formulário de Cadastro. </a> ";
            }


} else{ //tratamento de erro e redirecionamento
    echo "<p> Esta é uma página de tratamento de dados </p>";
    echo "<p> Clique <a href='produto.php'> aqui </a> para acessar o formulário de Cadastro. </a> ";
}

?>