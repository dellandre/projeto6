<?php

try{

    $conexao = new PDO("mysql:dbname=crud;host=localhost", "root", "");
}

catch(Exception $e) {
    echo "Erro ao conectar com banco de dados..! . $e";
}





?>