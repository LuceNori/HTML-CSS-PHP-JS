<?php
try{
    $conexao = new PDO("mysql:host=localhost; dbname=projetoweb2","root","");
}catch(PDOException $e){
    die("Ocorreu um erro inesperado " . $e->getMessage());
}

$nome = $_POST['nome'];
$cep = $_POST['cep'];

try{
    $sql = "insert into campus (CEP, nomeCampus) values ('$cep','$nome')";
    $conexao->exec($sql);
    echo "Salvo com sucesso !!!";
    header('Location: ../../view/campus/buscarCampus.php');
}catch(PDOException $e){
    die("Ocorreu um erro " . $e->getMessage());
}

?>