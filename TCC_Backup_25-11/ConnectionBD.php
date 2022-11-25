<?php
    $NomeServer = "localhost:3306";
    $Username = "root";
    $Senha = "";
    $Database = "pynpinbd";

    //Criando Conexão
    $Connection = mysqli_connect($NomeServer,$Username,$Senha,$Database);

    //Database Connection Checker
    if ($Connection){
        echo "Conectado com Sucesso";
    }
    else{
        die("Erro".mysqli_connect_error());
    }

?>