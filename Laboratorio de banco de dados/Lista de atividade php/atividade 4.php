<?php
function calculo($val1, $val2){
    $parcela = $val1 / $val2;
    $format_parcela = number_format($parcela,2);

    echo "O valor da compra é: R$ $val1 <br>Em $val2 parcelas de: R$ $format_parcela";
}

$num1 = $_POST['val_compra'];
$num2 = $_POST['parcela'];
$resu = calculo($num1, $num2);
echo $resu;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado ATIVIDADE 4</title>
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
            top: 50%;
            left: 35%;
            right: 35%;
            
        }
        </style>
</head>
<body>
    
</body>
</html>