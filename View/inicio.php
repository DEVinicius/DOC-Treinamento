<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class= 'cadastro'>
        <p>Cadastro</p>
        <form action="../Controller/cadastro.php" method='post'>
            <label for="nome_user">Nome</label>
            <input type="text" name="nome_user" id="nome_user">

            <label for="email">Email</label>
            <input type="text" name="email" id="email ">

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha ">

            <input type="submit">
        </form>
    </div>
    <div class= 'login'>
        <p>Login</p>
        <form action="../Controller/login.php" method="post">
            <label for="email">Email</label>
            <input type="text" name="email" id="email ">

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">

            <input type="submit">
        </form>
    </div>
</body>
</html>