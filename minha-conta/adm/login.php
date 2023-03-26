<?php
    include "../adm/controle.php";
?>

<div class="login">
    <h1> Area de Login </h1>
    <hr>
    <div class="row ">
        <form name="form" method="post" action="valida.php">
            <div class="mb-3">
                <label for="login" class="form-label" name="login" required> Login </label>
                <input type="text" class="form-control" id="login" name="login" required>   
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label" name="senha" required> Senha </label>
                <input type="password" class="form-control" id="senha" name="senha" required>   
            </div>
            
                <button type="submit" class="btn btn-primary"> ok </button>
                               
            
        </form>

        <div class="mt-5 text-danger text-center">
            <?php
                include "valida.php";
            ?>
        </div>
        
    </div>
</div>

<?php include './includes/rodape.php'; ?>