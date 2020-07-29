<?php
session_start();
require_once 'db_conect.php';

if(isset($_POST['btn-editar'])){
    // //mysql
    // $nome = mysqli_escape_string($conect, $_POST['nome']);
    // $sobrenome = mysqli_escape_string($conect, $_POST['sobrenome']);
    // $email = mysqli_escape_string($conect, $_POST['email']);
    // $idade = mysqli_escape_string($conect, $_POST['idade']);
    // $id = mysqli_escape_string($conect, $_POST['id']);

    //mysql
    $nome = pg_escape_string($conect, $_POST['nome']);
    $sobrenome = pg_escape_string($conect, $_POST['sobrenome']);
    $email = pg_escape_string($conect, $_POST['email']);
    $idade = pg_escape_string($conect, $_POST['idade']);
    $id = pg_escape_string($conect, $_POST['id']);

    $sql = "UPDATE clientes set nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade='$idade' WHERE id='$id'";

    // if(mysqli_query($conect, $sql)){
    if(pg_query($conect, $sql)){
        $_SESSION['menssagem'] = "Atualizado com sucesso!";
        header('Location: ../index.php?sucesso');
    } else{
        $_SESSION['menssagem'] = "Erro ao atualizar com sucesso!";
        header('Location: ../index.php?erro');
    }
}