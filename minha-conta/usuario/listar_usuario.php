<?php
    include "./includes/conexao.php"; //inclui o arquivo de conexão
   
    include "../adm/seguranca_adm.php";

    // seleciona totodos os campos da tabela usuário ordenado pelo nome
    $sql = "select * from usuario order by nome";
    $seleciona = mysqli_query($conexao,$sql); // executa a sql com base na conexão criada

?>



    
    <div class="text-end">
            <a href="usuario.php">
                <button type="button" class="btn btn-success btn-sm"> NOVO USUÁRIO </button>
            </a>
        </div>
        <!--************************************************* Lista de usuários -->
        <h1 class="text-center">Listar Usuários</h1>
      <!--*************************************************** Linha de Cabeçalho -->
    </div>
    <div class=" row text-center bg-dark text-light p-2">
        <div class="col-2">
        Nome
        </div>
        <div class="col-2">
        Login
        </div>
        <div class="col-2">
        Senha
        </div>
        <div class="col-2">
        Email
        </div>
        <div class="col-2">
        Nível
        </div>
        <div class="col-2">
        Controles
        </div>
    </div>
    <!--**************************************************** Lista de usuarios no BD -->
    <?php 
        while ($exibe = mysqli_fetch_array($seleciona)){
            $login = $exibe['login'];
    ?>
    <div class=" row text-center  p-2">
        <div class="col-2">
        <?php echo $exibe['nome'] ?>
        </div>
        <div class="col-2">
        <?php echo $exibe['login'] ?>
        </div>
        <div class="col-2">
        ***
        </div>
        <div class="col-2">
        <?php echo $exibe['email'] ?>
        </div>
        <div class="col-2">
        <?php echo $exibe['nivel'] ?>
        </div>
        <div class="col-2">
            <a href="vizualizar_usuario.php?login=<?php echo $login ?>">
                <span class="material-symbols-outlined"> visibility </span></a> 

            <a href="alterar_usuario.php?login=<?php echo $login ?>">  
                <span class="material-symbols-outlined"> edit </span></a> 
                
            <a href="excluir_usuario.php?login=<?php echo $login ?>" onclick="return confirm('Confirma a Exclusão do Usauário?')">
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