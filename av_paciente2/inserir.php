<?php

$Espontanea4 = $_POST["Espontanea4"];
$ComandoVerbal3 = $_POST["ComandoVerbal3"];
$EstimuloDol2 = $_POST["EstimuloDol2"];
$Nenhuma1 = $_POST["Nenhuma1"];
$PalavraFrAp5= $_POST["PalavraFrAp5"];
$PalavrasInap4 = $_POST["PalavrasInap4"];
$ChoroGrito3 = $_POST["ChoroGrito3"];
$SonsIncomp2 = $_POST["SonsIncomp2"];
$Nenhuma1 = $_POST["Nenhuma2"];
$ObedecePront6 = $_POST["ObedecePront6"];
$LocalizaDorEstim5 = $_POST["LocalizaDorEstim5"];
$RetirSegEstim4 = $_POST["RetirSegEstim4"];
$FlexaoAnormal3 = $_POST["FlexaoAnormal3"];
$ExtensaoAnormal2 = $_POST["ExtensaoAnormal2"];
$Ausencia1 = $_POST["Ausencia1"];
$TotalGCS = $_POST["TotalGCS"];

    include("conecta.php");

        $comando = $pdo->prepare("INSERT INTO  VALUES (\"$total\")");

        $resultado = $comando->execute();
    echo("{\"resultado\":1}"); 

?>