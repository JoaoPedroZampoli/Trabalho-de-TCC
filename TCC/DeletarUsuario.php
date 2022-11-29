<?php
    include_once("config.php");
    session_start();
    $IdUsuario = $_SESSION['row'][0];

    $result = mysqli_query($conexao, "DELETE FROM tb_usuarios WHERE IdUsuario = $IdUsuario");
    header('Location: HomePage.html');
?>