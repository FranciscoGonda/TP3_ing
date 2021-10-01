<?php
    require_once 'calcular.php';

    if($_POST != ''){
        $calculo = new calcular($_POST['lado1'], $_POST['lado2']);
    }
    
    $datos = $calculo->calcular_superficie();
    echo 'la superficie del cuadrado es: '.($datos);
?>