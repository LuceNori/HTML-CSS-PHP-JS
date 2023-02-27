<?php
    if(isset($_POST['nome'])){
        echo ("Parametro enviado por POST: ").$_POST['nome']."</br>";
        echo ("Parametro enviado por POST: ").$_POST['email']."</br>";
    }
    if(isset($_GET['nome'])){
        echo ("Parametro enviado por GET: ").$_GET['nome']."</br>";
        echo ("Parametro enviado por GET: ").$_GET['email']."</br>";
    }
?>