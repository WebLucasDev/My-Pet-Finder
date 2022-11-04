<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'my-pet-finder'

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if($conexao -> connect_errno)
    {
        echo "Erro";
    }

    else
    {
        echo "Conecção efetuada com sucesso";
    }

?>