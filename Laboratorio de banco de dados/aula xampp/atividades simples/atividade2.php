<?php
    $valor1 = $_POST['valor'];

    if ($valor1<=200){

        $lucro = $valor1 * 1.45;

        echo "O lucro em cima do valor de $valor1 foi de: $lucro devido ter sido menor que R$ 200,00";

    }else{

        $lucro = $valor1 * 1.30;

        echo "O lucro em cima do valor de $valor1 foi de: $lucro devido ter sido maior que R$ 200,00";
    }
?>