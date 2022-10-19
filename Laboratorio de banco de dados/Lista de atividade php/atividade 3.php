<?php
function soma_mult_3($val1, $val2){
    $soma = 0;
    echo "Os numeros multiplos de 3 de $val1 á $val2 são: ";
    
    for($cont = $val1; $cont <= $val2; $cont ++){
        if($cont %3 == 0){
            echo "$cont; ";
            $soma = $soma + $cont;
        }
    }
    echo "<br>A soma dos multiplos de 3 é: ";
    return $soma;
}

$num1 = $_POST['n1'];
$num2 = $_POST['n2'];
echo $resu = soma_mult_3($num1, $num2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado ATIVIDADE 3</title>
    <style type="text/css">
    body{
            background-image:url("https://c.tenor.com/qhZUzWdQLX8AAAAC/chinese-tom-tom-and-jerry.gif");
            background-repeat:no-repeat;
            background-size:cover;
            
            text-align: center;
            font-weight: bold;
            font-size: 22px;
            color: white;
            
            margin: 0;
            position: absolute;
            top: 40%;
            left: 20%;
            right: 10%;
            
        }
        </style>
</head>
<body>
</body>
</html>
