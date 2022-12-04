<?php

    include_once("config.php");
    //$IdUsuario = $_SESSION['row'][0];

    if(isset($_POST['InputEnviar'])){
        $NomeUsuario = $_POST['NomeCompleto'];
        $EmailUsuario = $_POST['Email'];
        $CPFUsuario = $_POST['CPF'];
        $TelefoneUsuario = $_POST['Telefone'];
        $GeneroUsuario = $_POST['Genero'];
        $DataNascUsuario = $_POST['DataNasc'];
        $SenhaUsuario = $_POST['Senha'];
        $IdUsuario = $_POST['IdUsuario'];

        $SqlUpdate = "UPDATE tb_usuarios SET NomeUsuario='$NomeUsuario', EmailUsuario='$EmailUsuario', CPFUsuario='$CPFUsuario', TelefoneUsuario='$TelefoneUsuario', GeneroUsuario='$GeneroUsuario', DataNascUsuario='$DataNascUsuario', SenhaUsuario='$SenhaUsuario' WHERE IdUsuario='$IdUsuario'";

        $result = $conexao->query($SqlUpdate);

        unset($_SESSION['row']);
        $sql = "SELECT * FROM tb_usuarios WHERE IdUsuario='$IdUsuario'";
        //$result = $conexao->query($sql);
        $result = mysqli_query($conexao, $sql);

        $row = mysqli_fetch_array($result);
        
        session_start();

        $_SESSION['row'] = $row;


    }
    //session_abort();
    //include_once("Sistema.php");
    //echo '<script> Sucesso() </script>';
    header('Location: Sistema.php');
?>