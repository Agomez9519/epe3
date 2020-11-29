<?php

include 'conexion.php';

ingresarProducto($_POST['nom'],$_POST['desc'],$_POST['dir'],$_POST['emp'],$_POST['tel'],$_POST['mail'],$_POST['pre'],$_POST['img']);

/*Funcion que ingresa a la base de datos un nuevo producto y retorna al administrador a la tabla */
function ingresarProducto($nombre,$descripcion,$direccion,$empresa,$telefono,$email,$precio,$img){
    $sentencia="INSERT INTO servicios (nombre,descripcion,direccion,empresa,telefono,email,precio,img) VALUES ('".$nombre."' , '".$descripcion."' , '".$direccion."' , '".$empresa."' , '".$telefono."' , '".$email."' , '".$precio."' , '".$img."') ";
    mysql_query($sentencia) or die(mysql_error());
    return header("location:tabla.php");
}

?>