<?php

if (isset($_POST['submit'])) {
    // print_r('Nome: <b>'. $_POST['nome']);
    // print_r('</b><br>');
    // print_r('Sobre Nome: <b>'. $_POST['sobrenome']);
    // print_r('</b><br>');
    // print_r('E-mail: <b>'. $_POST['email']);
    // print_r('</b><br>');
    // print_r('Senha: <b>'. $_POST['senha']);
    include_once('conexao.php');

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = mysqli_query($MySQLi, 'INSERT INTO id21634134_dbenfotec.login(`id`, `nome`, `sobrenome`, `email`, `senha`) 
    VALUES ("[$nome]","[$sobrenome]","[$email]","[$senha]")');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: linear-gradient(45deg, cyan, yellow);
        }

        div {
            display: box;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.9);
            padding: 25px;
            border-radius: 15px;
            color: white;
        }

        input {
            padding: 9px;
            border: none;
            outline: none;
            font-size: 19px;
        }

        #submit {
            background-color: dodgerblue;
            padding: 15px;
            width: 98%;
            border-radius: 15px;
            color: yellow;
            font-size: 15px;
        }
    </style>
</head>
<h5><i> Clicke no Link Abaixo, Para Criar uma Conta </i></h5>
<h4><i><a href="#" style="color: #00aaff">Criar Conta de Usuário ?</a></i></h4>

<body>
    <div>
        <form action="" method="POST">
            <h3>LOGIN</h3>
            <!-- <label for="nome" class="labelinput"> Nome: </label> -->
            <input type="text" name="nome" placeholder="Digite seu nome"><br><br>

            <!-- <label for="sobrenome" class="labelinput"> SobreNome: </label> -->
            <input type="text" name="sobrenome" placeholder="Digite seu Sobrenome"><br><br>

            <!-- <label for="email" class="labelinput"> E-mail: </label> -->
            <input type="text" name="email" placeholder="Seu E-mail Cadastrado"><br><br>

            <!-- <label for="senha" class="labelinput"> Senha: </label> -->
            <input type="password" name="senha" placeholder="Sua Senha Cadastrada"><br><br>
            <input type="submit" name="submit" id="submit">
        </form>
    </div>

</body>

</html>
