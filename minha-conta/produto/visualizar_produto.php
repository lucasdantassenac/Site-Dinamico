
<?php

include "../adm/conexao.php";
include "../adm/controle.php";
include "../adm/seguranca.php";


if(isset($_GET['id'])){
    //entrada - recebe os dados
    $id = $_GET['id'];

    //processamento - escreve e executa a sql
    $sql = "select * from produto where id = $id";
    $seleciona = mysqli_query($conexao,$sql);
    $exibe = mysqli_fetch_array($seleciona);

    $id = $exibe['id'];
    $descricao = $exibe['descricao'];
    $preco = $exibe['preco'];



?>

    <div class="container bg-info p-3 mt-5">
        <div class="text-end">
            <a href="listar_produto.php">
                <button class="btn btn-success btn-sm"> Listar Produto </button>
            </a>
        </div>

        <h2> 
          Produto: <?php echo $exibe['id']?>   
             </h2> 
        <hr>

        <div class="container text-start bg-gradient p-3">
        <?php
                echo "
            <p>  $descricao </p>
            <p>  $preco </p>
            ";
            ?>
        </div>

        <div class="row">
            <div class="col text-start">
                  <a href='alterar_produto.php'>
                    <button class="btn btn-secondary btn-sm"> Voltar</button>
                
            </div>
            
            <div class="col text-end">
                 <a href='alterar_produto.php?id=<?php echo $id ?>'>
                    <button class="btn btn-primary btn-sm"> Editar Dados</button>
                
            </div>
        </div>
    </div>
  
<?php
  include "../adm/rodape.php";
    }
    else{
        echo "
        <p> Esta é uma página de tratamento de dados. </p>
        <p> Clique <a href='listar_produto.php'> aqui </a> para selecionar o produto que deseja viaualizar. </p>
        ";
    }

?>