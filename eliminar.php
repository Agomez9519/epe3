<?php 

include 'conexion.php';

eliminarServicio($_GET['id']);

/*Funcion que elimina el servicio de la base de datos */

Function eliminarServicio($id){

    $sentencia="DELETE FROM servicios WHERE id=$id";
    mysql_query($sentencia) or die(mysql_error());
    return header("location:tabla.php");

}

?>