<?php
    if (session_status() !== PHP_SESSION_ACTIVE){
        session_start();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Cadastro de Médicos </title>
    </head>
    <body>
        <?php
            if (isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset ($_SESSION['msg']);
            }
        ?>

        <p><h1> Médicos - inclusão</h1></p>
        <form method = "POST" action = "inc_med.php">
        <label> Nome: <input type = "text" size = "80" name = "nome" maxlength = "100" required></label>
        <p><label> CRM nº: <input type = "text" size = "20" name = "crm" maxlength = "20" required></label>
        <p><label> Salário: <input type = "number" min = "0" max = "30000" step = "100" name = "salario" required></label>
        <p><label> Especialidade: <select name = "id_esp"></label>

        <?php
            include("conexao.php");
            $query = "SELECT * from especialidade ORDER BY descricao;";
            $resu = mysqli_query($con, $query) or die(mysqli_connect_error());
            while ($reg = mysqli_fetch_array($resu)){
        ?>
        <option value = "<?php echo $reg['id'];?>"><?php echo $reg['descricao'];?></option>
        <?php
            }
            mysqli_close($con);
        ?>
        
        </select>
        <p><input type = "submit" value = "Enviar"> <input type = "reset" value = "Limpar"></p>
        </form>
    </body>
</html>