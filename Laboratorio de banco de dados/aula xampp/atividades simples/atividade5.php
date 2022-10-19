<?php
    $meses = array('Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro');
    $opc = $_POST['resposta'];

    if($opc=="FOR"){
        for($i=0;$i<12;$i++){
            $valor = $i+1;
            echo "Mês de numero: $valor nome: $meses[$i]<br>";
        }
    }

    if($opc=="FOREACH"){
        $nome_meses = array('','Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro');

        foreach($nome_meses as $posicao => $nome_meses){
            echo 'Numero: '.$posicao .' Nome: ' .$nome_meses .'<br>';
        }
        
    }
?>