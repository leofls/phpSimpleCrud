<?php

// Conexão com banco de dados
/* Conexão Mysql
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "crud";


$conect = mysqli_connect($servername, $username, $password, $db_name);
mysqli_set_charset($conect, "utf-8");
if(mysqli_connect_error()){
    echo "Erro de conexão: ".mysqli_connect_error();
}
*/

// conexão Postgres 

/*// local
$servidor = "localhost";
$porta = 5432;
$bancoDeDados = "crud";
$usuario = "postgres";
$senha = "admin";
*/

// heroku
$servidor = "ec2-50-19-26-235.compute-1.amazonaws.com";
$porta = 5432;
$bancoDeDados = "d9jnphr8ukdo85";
$usuario = "wqkyemllvltwmv";
$senha = "4650a58bfd84e8a0d70da5f1bdef1fd8ee1bd9eb4544dc94e78fe3fbe79fd9c7";

$conect = pg_connect("host=$servidor port=$porta dbname=$bancoDeDados user=$usuario password=$senha");
if(!$conect) {
    die("Não foi possível se conectar ao banco de dados.");
}