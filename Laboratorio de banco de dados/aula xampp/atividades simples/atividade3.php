<?php
    $valorA = $_POST['v_a'];
    $valorB = $_POST['v_b'];
    $valorC = $_POST['v_c'];

    $delta = ($valorB * $valorB) - ((4 * $valorA) * $valorC);

    $x1 = (- $valorB + $delta) / (2 * $valorA);

    $x2 = (- $valorB - $delta) / (2 * $valorA);

    echo "Δ = $delta e X1 = $x1 e X2 = $x2";
?>