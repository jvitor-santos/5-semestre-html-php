<?php
session_start();
include_once("conexao.php");

$id = $_POST['id'];
$nome = $_POST['nome'];

$result = "UPDATE especialidade SET descricao='$nome' WHERE id='$id'";
$resultado= mysqli_query($con, $result);

if(mysqli_affected_rows($con)){
    $_SESSION['msg'] = "<p style='color:green;'>Especialidade alterada com sucesso</p>";
    header("Location: alter_espe.php");
}else{
    $_SESSION['msg'] = "<p style='color:red;'> Especialidade não foi alterada</p>";
    header("Location: edit_espe.php?id=$id");

}

?>