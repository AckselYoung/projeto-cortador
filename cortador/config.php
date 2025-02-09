<?php
    $dbHost = 'Localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = 'projetocortador';
    $conexao = new mysqli($dbHost,$dbUser,$dbPass,$dbName);
    // $conexao = new mysqli(hostname: $dbHost, $dbUser, $dbPass, $dbName);

    if($conexao -> connect_errno)
    {
        echo "Erro ao abrir o BD";
    }
    else{
        echo "Conexão efetuada com sucesso";
    }
?>