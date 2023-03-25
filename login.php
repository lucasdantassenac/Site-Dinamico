<?php 
$styles = array(
  0 => 'global.css',
  1 => 'login.css',
  2 => 'header.css',
  3 => 'rodape.css',
);
?>
  <body>
          <header>
             Fazer Seu Login
        </header>
            
          
        <form name="form">
          
          <label for="email"></label>
          <input id="email" type="email" placeholder="Email" class="p-3">
          <br><br>
          <label  for="senha"></label>
          <input id="senha" type="passeword" placeholder="Senha" class="p-3">
          <br><br>
          <!-- <button>ENTRAR</button>
          <button>CADASTRAR-SE</button> -->
      </form>
      <div class="esqueceu">
          Esqueceu a senha?
      </div>

    <div class="botao">
        <button class="btn btn-sucess" type="submit" id="entrar"> Entrar </button> 
          <!-- <button class="btn btn-sucess"> Cadastra-se</button>  -->
    </div>
      
      <div class="novo">
     Novo na CariocaTech? <a href="#"> CADASTRE-SE </a> 
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>