<?php

$consulta=ventaServicio($_POST['ids'],$_POST['fechai'],$_POST['fechat'],$_POST['hora'],$_POST['tipop']);

function ventaServicio($id,$fechai,$fechat,$hora,$tipop){

    include 'conexion.php';

    $sql="INSERT INTO venta (id,fecha_inicio,fecha_termino,hora_servicio,pago) VALUES ('".$id."','".$fechai."','".$fechat."','".$hora."','".$tipop."') ";
    $resultado=mysql_query($sql) or die (mysql_error());
    
    //aca redirige a la pagina de pago servipag e ingresa a la tabla venta el registro
    return header("location:https://ww3.servipag.com/pagoenlinea/wcm/connect/desktop/home");

    

}



?>