<?php


$con=mysql_connect("localhost","root","") or die 
('Ha fallado la conexión: '.mysql_error());

mysql_select_db("epe3",$con) or die 
('No se pudo conectar a la base de datos: '.mysql_error());
return $con;


?>