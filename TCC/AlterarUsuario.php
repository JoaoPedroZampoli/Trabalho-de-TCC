<?php
    include_once("config.php");
    session_start();
    $IdUsuario = $_SESSION['row'][0];

    /*$QueryAlterar = $conexaoPDO->prepare("UPDATE tb_usuarios SET NomeUsuario=?, EmailUsuario=?, CPFUsuario=?, TelefoneUsuario=?, GeneroUsuario=?, DataNascUsuario=?, SenhaUsuario=? WHERE IdUsuario=?");
    $QueryAlterar->execute(array(
        $NomeUsuario = $_POST['NomeCompleto'],
        $EmailUsuario = $_POST['Email'],
        $CPFUsuario = $_POST['CPF'],
        $TelefoneUsuario = $_POST['Telefone'],
        $GeneroUsuario = $_POST['Genero'],
        $DataNascUsuario = $_POST['DataNasc'],
        $SenhaUsuario = $_POST['Senha'],
        $IdUsuario
    ));*/

    $NomeUsuario = $_POST['NomeCompleto'];
    $EmailUsuario = $_POST['Email'];
    $CPFUsuario = $_POST['CPF'];
    $TelefoneUsuario = $_POST['Telefone'];
    $GeneroUsuario = $_POST['Genero'];
    $DataNascUsuario = $_POST['DataNasc'];
    $SenhaUsuario = $_POST['Senha'];
    $QueryAlterar = "UPDATE tb_usuarios SET NomeUsuario=$NomeUsuario, EmailUsuario=$EmailUsuario, CPFUsuario=$CPFUsuario, TelefoneUsuario=$TelefoneUsuario, GeneroUsuario=$GeneroUsuario, DataNascUsuario=$DataNascUsuario, SenhaUsuario=$SenhaUsuario WHERE IdUsuario=$IdUsuario";
    $result = mysqli_query($conexao, $QueryAlterar);

    session_abort();
    include_once("Sistema.php");
    echo '<script> Sucesso() </script>';
?>