<?php 
require_once './conexao.php';
if (ISSET($_POST['email'])){
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $senha = filter_var($_POST['senha'], FILTER_SANITIZE_STRING);
    $sql = "SELECT * FROM usuario WHERE email = '$email';";
    $query = mysqli_query($conexao, $sql);
    $query = mysqli_fetch_array($query);
    if($query){
        SESSION_START();
        $_SESSION['email'] = $email;
        $_SESSION['nivel'] = $query['nivel'];
        header('location:../minha-conta');
    } else {
        echo "deu erro";
    }
}

?>