<?php

// Conexão com banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "crud";

$conect = mysqli_connect($servername, $username, $password, $db_name);
mysqli_set_charset($conect, "utf-8");
if(mysqli_connect_error()){
    echo "Erro de conexão: ".mysqli_connect_error();
}