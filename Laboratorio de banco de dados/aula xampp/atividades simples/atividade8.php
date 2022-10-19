<?php
function fat($val1){
    $calculo = 1;
    for ($i=1; $i<=$val1; $i++){
        $calculo = $calculo*$i;
    }
    echo "O fatorial de $val1 é: $calculo";
}

$num = $_POST['n1'];
fat($num);

?>