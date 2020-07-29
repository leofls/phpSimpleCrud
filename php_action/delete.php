<?php
session_start();
require_once 'db_conect.php';

if(isset($_POST['btn-deletar'])){
    // $id = mysqli_escape_string($conect, $_POST['id']);
    $id = pg_escape_string($conect, $_POST['id']);

    $sql = "DELETE from clientes WHERE id='$id'";

    // if(mysqli_query($conect, $sql)){
    if(pg_query($conect, $sql)){
        $_SESSION['menssagem'] = "Deletado com sucesso!";
        header('Location: ../index.php?sucesso');
    } else{
        $_SESSION['menssagem'] = "Erro ao Deletar com sucesso!";
        header('Location: ../index.php?erro');
    }
}