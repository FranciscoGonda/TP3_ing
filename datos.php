<?php
    require_once 'calcular.php';

    if($_POST != ''){
        $calculo = new calcular($_POST['lado1'], $_POST['lado2']);
    }
    
    $datos = $calculo->sumar_lados();
    echo 'la suma de los lados es: '.($datos);
?>