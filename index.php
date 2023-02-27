<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação</title>
    <link rel="stylesheet" href="layout.css">
</head>
<body>
    <form method="POST" action="acao.php">
        <h2>POST</h2>
        <label>nome:</label>
        <input type="text" name="nome">
        <label>e-mail:</label>
        <input type="text" name="email">
        <input type="submit">
    </form>
    <form method="GET" action="acao.php">
        <h2>GET</h2>
        <label>nome:</label>
        <input type="text" name="nome">
        <label>e-mail:</label>
        <input type="text" name="email">
        <input type="submit">
    </form>
</body>
</html>