<?php
    //Casa
    $dbHost = "localhost:3306";
    //Escola
    //$dbHost = "localhost:3308";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "pynpinbd";

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    $conexaoPDO = new PDO("mysql:host=$dbHost;dbname=" . $dbName, $dbUsername, $dbPassword);

    /*if($conexao->connect_errno){
        echo "Erro";
    }
    else{
        echo "Conexão feita com sucesso";
    }*/

?>