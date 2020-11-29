<?php

include 'conexion.php';



$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];

$query="INSERT INTO usuario VALUES('$user','$pass','cliente')";


$resultado=mysql_query($query);

/*Ingresa un nuevo usuario y lo reenvia al login para acceder al sistema */

        header("location:index.html");
   
    
  




