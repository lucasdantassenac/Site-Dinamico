<?php
    include "../adm/conexao.php"; //inclui o arquivo de conexão
    include "../adm/controle.php";
    include "../adm/seguranca_adm.php";

    // seleciona totodos os campos da tabela usuário ordenado pelo nome
    $sql = "select * from produto order by descricao";
    $seleciona = mysqli_query($conexao,$sql); // executa a sql com base na conexão criada

?>






        <div class="text-end">
          <a href="produto.php"> 
            <button type="button" class="btn btn-success btn-sm"> NOVO PPRODUTO </button>
          </a>
        </div>
        <!-- *******************************************************  Lista de usuários -->
        <h1 class="text-center">Lista de Produtos </h1>
        <!-- ********************************************************** Linha de Cabeçalho -->
          <div class="row text-center bg-dark text-light p-2">
              <div class="col-3"> id </div>
              <div class="col-3"> Descrição </div>
              <div class="col-3"> Preço </div>
             
              <div class="col-3"> Controles </div>
          </div>
        <!-- ********************************************************** Lista de produtos no BD  -->
              
             
              <?php 
        while ($exibe = mysqli_fetch_array($seleciona)){
            $id = $exibe['id'];
    ?>
    <div class=" row text-center p-1">
        <div class="col-3">
        <?php echo $exibe['id'] ?>
        </div>
        <div class="col-3">
        <?php echo $exibe['descricao'] ?>
        </div>
        <div class="col-3">
        <?php echo $exibe['preco'] ?>
        </div>
        <div class="col-3">
            <a href="visualizar_produto.php?id=<?php echo $id ?>">
                <span class="material-symbols-outlined"> visibility </span></a> 

            <a href="alterar_produto.php?id=<?php echo $id ?>">  
                <span class="material-symbols-outlined"> edit </span></a> 
                
            <a href="excluir_produto.php?id=<?php echo $id ?>" onclick="return confirm('Confirma a Exclusão do Usauário?')">
                <span class="material-symbols-outlined"> delete </span></a> 
        </div>
       </div>
        
    
    
    <?php
     }
    ?>
</div>
    <hr>
  
<?php
include "../adm/rodape.php";
?>