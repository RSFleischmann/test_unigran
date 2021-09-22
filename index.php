<?php
    include_once("imc.class.php");

    $obj = new IMC();

    $obj->setNome("Roberto");
    $obj->setPeso("86");
    $obj->setAltura("1.79");

    $obj->setIMC();

    echo $obj->getNome()." é classificado como: ".$obj->getClassificacao()." e tem grau de obesidade ".$obj->getGrau();
?>