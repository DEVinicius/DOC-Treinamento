<?php
    session_start();

    include_once '../database/database.php';
    include_once '../Model/user.php';

    $database = new Banco();

    $db = $database->conectar();

    $user = new User($db);

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $user->email = $email;
    $user->senha = $senha;

    $user->read_one();

    $_SESSION['email'] = $user->email;
    $_SESSION['senha'] = $user->senha;
    $_SESSION['nome'] = $user->nome;

    echo 'nome: '.$_SESSION['nome'];

    header('location: ../View/index.php');
?>