<?php
function fat($val1){
    $divisores = 0;
    
    for($contador=2; $contador<$val1; $contador++){
        if($val1 % $contador == 0){
            echo "Multiplo de $contador <br />";
            $divisores++;}
    }if($divisores){
        $Resp = "$val1 Não é primo, tem $divisores divisor(es) além de 1 e ele mesmo";
    }else{
        $Resp = "É primo!";
    }
    return $Resp;
    
}

$num = $_POST['n1'];
$resu = fat($num);
echo $resu;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
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
            margin-right: -50%; 
        }
        </style>
</head>
<body>
    
</body>
</html>