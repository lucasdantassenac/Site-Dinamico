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





        <h1 class='text-center'>Alterar Produtos </h1>
        <hr>
        <form name="id" method="post" action="update_produto.php">
        <input type="hidden" name="id" value="<?php echo $id ?>">   
        
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição" value="<?php echo $descricao ?>" required>
            </div>  
            <div class="mb-3">
                <label for="preco" class="form-label">Preço</label>
                <input type="text" class="form-control" id="preco" name="preco" placeholder="Preco" value="<?php echo $preco ?>" required>
            </div>
            
            <div class="text-end">
                <button type="button" class="btn btn-secondary">Limpar</button>
                <button type="submit" class="btn btn-primary ">Alterar</button>
            </div>


        </form>
    </div>   
   

<?php
    include "../adm/rodape.php";
    }
    else{
        echo "
        <p> Esta é uma página de tratamento de dados. </p>
        <p> Clique <a href='listar_produto.php'> aqui </a> para selecionar o usuario que deseja viaualizar. </p>
        ";
    }

?>