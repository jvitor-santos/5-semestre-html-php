<?php
    session_start();
    include_once("conexao.php");

    $id = $_POST['id'];
    $nome = $_POST['nome'];

    // fazer a verificação se id tem na tabela médico
    $verif="SELECT * from medico WHERE id_espe='$id'";
    $resu= mysqli_query($con, $verif);
    if (mysqli_affected_rows($con)){
        $_SESSION['msg'] = "<p style='color:green;'>Esta especialidade não pode ser excluida, pois existe médico cadastrado</p>";
        header("Location: alter_espe.php");
    }else{

        $result= "DELETE FROM especialidade WHERE id='$id'";
        $resultado= myslqi_query($con, $result);

        if(mysqli_affected_rows($con)){
            $_SESSION['msg'] = "<p style='color:green;'>Especialidade excluida com sucesso</p>";
            header("Location: alter_espe.php");
        }else{
            $_SESSION['msg'] = "<p style='color:red;'>Especialidade não foi excluida</p>";
            header("Location: edit_espe.php?id=$id");
        }
    }
?>
