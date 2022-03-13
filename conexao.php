<?php

try{

    $conexao = new PDO("mysql:dbname=agenda;host=localhost", "root", "");
}

catch(Exception $e) {
    echo "Erro ao conectar com banco de dados..! . $e";
}





?>