<?php 
    include_once '../database/database.php';
    include_once '../Model/user.php';

    $nome_user = $_POST['nome_user'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];

    $database = new Banco();
    $db = $database->conectar();

    $user = new User($db);

     $user->nome_user = $nome_user;
     $user->senha = $senha;
     $user->email = $email;

    $user->insert();
    header('location: ../View/index.php');
?>
