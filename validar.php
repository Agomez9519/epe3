<?php

include 'conexion.php';

$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];

$query="SELECT * FROM usuario WHERE user='$user' and pass='$pass'";


$resultado=mysql_query($query);

$filas=mysql_num_rows($resultado);

if ($filas>0) {
    header("location:tabla.php");
  

}else{
    echo "<h1>Usuario y password incorrectas</h1>";
}



?>

