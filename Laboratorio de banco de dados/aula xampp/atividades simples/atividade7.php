<?php
function soma($val1,$val2){
    $soma = $val1 + $val2;
    echo "A soma de $val1 + $val2 = $soma";
}

function sub($val1,$val2){
    $sub = $val1 - $val2;
    echo "A subtração de $val1 - $val2 = $sub";
}

function mult($val1,$val2){
    $mult = $val1 * $val2;
    echo "A multiplicação de $val1 X $val2 = $mult";
}

function div($val1,$val2){
    $div = $val1 / $val2;
    echo "A divisão de $val1 / $val2 = $div";
}

function raiz($val1,$val2){
    $raiz1 = sqrt($val1);
    $raiz2 = sqrt($val2);
    echo "A raiz do numero $val1 é: $raiz1<br>A raiz do numero $val2 é: $raiz2";
}

$resp = $_POST['opc'];
$num1 = $_POST['n1'];
$num2 = $_POST['n2'];

switch($resp){
    case 1: soma($num1, $num2);
        break;
    case 2: sub($num1, $num2);
        break;
    case 3: mult($num1, $num2);
        break;
    case 4: div($num1, $num2);
        break;
    case 5: raiz($num1, $num2);
        break;
    default: echo "Opção invalida";
}
?>