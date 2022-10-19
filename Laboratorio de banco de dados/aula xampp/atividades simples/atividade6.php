<?php

$valorA = $_POST['resposta'];

switch($valorA){
    case 'a': echo "Vogal <br>";
        break;
    case 'e': echo "Vogal <br>";
        break;
    case 'i': echo "Vogal <br>";
        break;
    case 'o': echo "Vogal <br>";
        break;
    case 'u': echo "Vogal <br>";
        break;
    default: echo "Consoante<br>";
}
?>