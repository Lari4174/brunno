<?php
    include"includes/conecta.php";
    $sql = "UPDATE objetos SET id_emprestador = '', emprestador='', identificador='0'";
    $row = mysqli_query($conn, $sql);
    if($row){
        header("location:listausuarios.php");
    }
?>