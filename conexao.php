<?php
    $sevidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "cadastro";

    // Criar conexão
    $conn = mysqli_connect($sevidor, $usuario, $senha, $dbname);

    // Verificar conexão
    if(!$conn){
        die("Falha na conexão: " . mysqli_connect_error());
    }
?>