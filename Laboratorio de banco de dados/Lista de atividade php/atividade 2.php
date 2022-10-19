<?php
function delta($val_a, $val_b, $val_c){
    $delta = ($val_b * $val_b) + ((-4 * $val_a) * $val_c);
    return $delta;
}

$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
echo 'Δ: ', $resu = delta($a,$b,$c);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado ATIVIDADE 2</title>
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
            left: 50%;
            right: 45%;
        }
        </style>
</head>
<body>
</body>
</html>