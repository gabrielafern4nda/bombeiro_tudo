<?php

$Deitada = $_POST["Deitada"];
$SemiSentada = $_POST["SemiSentada"];
$Sentada = $_POST["Sentada"];


    include("conecta.php");

        $comando = $pdo->prepare("INSERT INTO forma_conducao VALUES  (\"$Deitada\", \"$SemiSentada\", \"$Sentada\")");

        $resultado = $comando->execute();
    echo("{\"resultado\":1}"); 

?>