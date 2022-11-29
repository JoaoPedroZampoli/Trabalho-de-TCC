<?php
    session_start();
    //print_r($_REQUEST)
    if(isset($_POST['submit']) && !empty($_POST['Email']) && !empty($_POST['Password'])){
        //Acessa o Sistema
        include_once('config.php');
        $Email = $_POST['Email'];
        $Senha = $_POST['Password'];

        /*print_r("Email:".$Email);
        print_r("Senha:".$Senha);*/

        $sql = "SELECT * FROM tb_usuarios WHERE EmailUsuario = '$Email' AND SenhaUsuario = '$Senha'";

        //$result = $conexao->query($sql);
        $result = mysqli_query($conexao, $sql);

        $row = mysqli_fetch_array($result);

        $_SESSION['row'] = $row;

        if(mysqli_num_rows($result) < 1){
            unset($_SESSION['Email']);
            unset($_SESSION['Password']);
            header('Location: Login.php');
        }
        else{
            //print_r("Existe");
            $_SESSION['Email'] = $Email;
            $_SESSION['Password'] = $Senha;
            //header('Location: Sistema.php');
            if($row["StatusUsuario"]==0){
                header('Location: Sistema.php');
            }
            else{
                header('Location: AdminPage.php');
            }
        }
    }
    else{
        //Não Acessa o Sistema
        header('Location: Login.php');
    }
?>