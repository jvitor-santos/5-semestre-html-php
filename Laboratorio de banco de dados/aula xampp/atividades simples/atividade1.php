<?php
    $nota1 = $_POST['n1'];
    $nota2 = $_POST['n2'];
    $nota3 = $_POST['n3'];
    $media = ($nota1 + $nota2 + $nota3) / 3;
    if ($media >=7){
        echo 'Nota: '.$media. ' o Aluno aprovado !!';
    }elseif ($media >=3 and $media <7){
        echo "Nota: $media o Aluno está em Exame!!";
    }else{
        echo "Nota: $media o Aluno Reprovado !!";
    }
?>