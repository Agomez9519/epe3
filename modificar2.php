<?php

include 'conexion.php';

modificarProducto($_REQUEST['id'],$_POST['nom'],$_POST['desc'],$_POST['dir'],$_POST['emp'],$_POST['tel'],$_POST['mail'],$_POST['pre'],$_POST['img']);

/*Funcion que modifica el servicio guarrdado en la base de datos y rerotna al administrador a la tabla */
function modificarProducto($id,$nombre,$descripcion,$direccion,$empresa,$telefono,$email,$precio,$img){
    $sentencia="UPDATE `servicios` SET nombre='".$nombre."', descripcion='".$descripcion."',direccion='".$direccion."', empresa='".$empresa."', telefono='".$telefono."',email='".$email."',precio='".$precio."',img='".$img."' WHERE id=$id ";
    mysql_query($sentencia) or die(mysql_error());
    return header("location:tabla.php");
}

?>