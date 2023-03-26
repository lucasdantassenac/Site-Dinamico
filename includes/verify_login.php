<?php 
require_once './conexao.php';
if (ISSET($_POST['email'])){
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $senha = filter_var($_POST['senha'], FILTER_SANITIZE_STRING);
    $sql = "SELECT * FROM usuario WHERE email = '$email';";
    $query = mysqli_query($conexao, $sql);
    $existe = mysqli_num_rows($query);
    
    if($existe){
        $dados = mysqli_fetch_array($query);
        $hash = $dados['senha'];
        if(password_verify($senha,$hash)){
        SESSION_START();
        $_SESSION['email'] = $email;
        $_SESSION['nivel'] = $dados['nivel'];
        header('location:../minha-conta');
        }else{
            echo "Usuário ou senha inválido";
        }
    
    }else{
        echo "Usuário ou senha inválido";
    }
    
}

?>


