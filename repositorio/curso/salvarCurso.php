<?php
try{
    $conexao = new PDO("mysql:host=localhost; dbname=projetoweb2","root","");
}catch(PDOException $e){
    die("Ocorreu um erro inesperado " . $e->getMessage());
}

$nome = $_POST['nome'];
$nota = $_POST['nota'];
$campus = $_POST['campus'];
$area = $_POST['area'];

try{
    $sql = "insert into curso (nomeCurso, notaCurso, idArea, idCampus) values ('$nome','$nota','$area','$campus')";
    $conexao->exec($sql);
    echo "Salvo com sucesso !!!";
    header('Location: ../../view/curso/buscarCurso.php');

}catch(PDOException $e){
    die("Ocorreu um erro " . $e->getMessage());
}

?>