<?php
$nome = $_POST['nome'];
include('conexao.php');

$query = "INSERT INTO especialidade (descricao) VALUES ('$nome')";
$resu = mysqli_query($con,$query);
if (mysqli_insert_id($con)){
    print "<br> Inclusão realizada com sucesso !!";
}

mysqli_close($con);
?>