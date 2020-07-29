<?php
session_start();
require_once 'db_conect.php';

if(isset($_POST['btn-cadastrar'])){
    /*mysql
    $nome = mysqli_escape_string($conect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($conect, $_POST['sobrenome']);
    $email = mysqli_escape_string($conect, $_POST['email']);
    $idade = mysqli_escape_string($conect, $_POST['idade']);*/
    
    $nome = pg_escape_string($conect, $_POST['nome']);
    $sobrenome = pg_escape_string($conect, $_POST['sobrenome']);
    $email = pg_escape_string($conect, $_POST['email']);
    $idade = pg_escape_string($conect, $_POST['idade']);

    $sql = "INSERT INTO clientes (nome,sobrenome,email,idade) VALUES ('$nome', '$sobrenome','$email','$idade')";

    // if(mysqli_query($conect, $sql)){
    if(pg_query($conect, $sql)){
        $_SESSION['menssagem'] = "Cadastrado com sucesso!";
        header('Location: ../index.php?sucesso');
    } else{
        $_SESSION['menssagem'] = "Erro ao cadastrar!";
        header('Location: ../index.php?erro');
    }
}