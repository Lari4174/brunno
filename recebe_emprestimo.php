<?php
    session_start();
    $id_emprestador = $_SESSION['id'];
    $cadastrador = $_SESSION['nome'];
    $id_item = $_GET['id'];
    include"includes/conecta.php";
    $sql = "UPDATE objetos SET id_emprestador = '$id_emprestador',emprestador = '$cadastrador', identificador = '1' WHERE id = $id_item";
    $query = mysqli_query($conn,$sql);
    if ($query){
        header("location: listausuarios.php");
    }
?>