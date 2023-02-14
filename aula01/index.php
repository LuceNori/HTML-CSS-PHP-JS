<?php
include('conexao.php');
if(isset($_POST['email']) || isset($_POST['senha'])){
    if(strlen($_POST['email'])==0){
        echo "preecha seu e-mail";
    }else if(strlen($_POST['senha'])==0){
        echo "preecha sua senha";
    }else{
        $email = $conn->real_escape_string($_POST['email']);
        $senha = $conn->real_escape_string($_POST['senha']);
        
        $sql_code = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $conn->query($sql_code) or die("falha na execução do códio SQL:".$conn->error);
        
        $quantidade = $sql_query->num_rows;

        if($quantidade==1){

            $usuario = $sql_query->fetch_assoc();
            
            if(!isset($_SESSION)){ 
                session_start();
            }
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: home.php");

        }else{
            echo "falha ao logar";
        }

    }
}
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
            <h2>Login</h2>
            <form action="" method="POST">
                    <div class="container">
                        <input type="text" name="email" required="">
                        <label>E-mail</label>
                    </div>
                    <div class="container">
                        <input type="password" name="senha" required="">
                        <label>Senha</label>
                    </div>
                    <button class="teste" type="submit">Logar</button> 
                <a href="cadastra.php">Cadastrar</a>
            </form>
    </div>
</body>
</html>
