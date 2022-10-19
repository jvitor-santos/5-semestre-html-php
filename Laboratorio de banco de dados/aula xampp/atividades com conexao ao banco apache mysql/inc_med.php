<?php
    if (session_status() !== PHP_SESSION_ACTIVE){
        session_start();
    }

    $nome = $_POST["nome"];
    $crm = $_POST["crm"];
    $salario = $_POST["salario"];
    $id_esp = $_POST["id_esp"];

    include('conexao.php');

    $query = "INSERT INTO medico (nome,crm,salario,id_espe) VALUES ('$nome','$crm','$salario','$id_esp')";
    $resu = mysqli_query($con,$query);

    if (mysqli_insert_id($con)){
        $_SESSION['msg'] = "<p style ='color:blue;'> Médico cadastrado com sucesso!</p>";
        header('Location: medico.php');
    }
    else{
        $_session['msg'] = "<p style = 'color: red;'>Médico não foi cadastrado!</p>";
        header('Location: medico.php');
    }
    mysqli_close($con);
?>