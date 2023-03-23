<?php
  include "../adm/controle.php";
?>


        <h1 class='text-center'>Cadastro de Produtos </h1>
        <hr>
        <form name="cadastro" method="post" action="cadastrar_produto.php" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nome" class="form-label">Npme</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
            </div>  
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição" required>
            </div>  
            <div class="mb-3">
                <label for="preco" class="form-label">Preço</label>
                <input type="text" class="form-control" id="preco" name="preco" placeholder="Preco" required>
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto" placeholder="Foto" required>
            </div>
            
            <div class="text-end">
                <button type="reset" class="btn btn-secondary">Limpar</button>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>


        </form>
<?php
include "../adm/rodape.php";
?>