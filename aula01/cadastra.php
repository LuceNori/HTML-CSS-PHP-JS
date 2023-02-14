<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula 01</title>
    <link rel="stylesheet" href="css/layout.css">
</head>
<body>
    <div class="box">
            <div class="login">
            <h2>Cadastro</h2>
            <form action="cadastrar.php" method="POST">
                    <div class="container">
                        <input type="text" name="nome" required="">
                        <label>Nome</label>
                    </div>
                    <div class="container">
                        <input type="text" name="email" required="">
                        <label>E-mail</label>
                    </div>
                    <div class="container">
                        <input type="password" name="senha" required="">
                        <label>Senha</label>
                    </div>
                <button class="teste" type="submit">Cadastrar</button> 
                <a href="index.php">Sair</a>
            </form>
    </div>
</body>
</html>