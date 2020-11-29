<?php 

$conexion=mysql_connect("localhost","root","");
mysql_select_db("epe3") or die ("cannot select DB");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="tabla.css">
    <title>Guayacan Aventura</title>
</head>
<body>
       <div class="imagen-fondo banner">  
       <p style="float:left ;
        font-size: 10px;
        color: grey;
        margin: auto 0px;
        display: inline-block;
        padding: 1px;">Siguenos en:<a href="http://www.facebook.com"><img src="https://img1.freepng.es/20171221/wgw/facebook-picture-5a3c060eccfa84.1675788915138831508396.jpg" alt="" style="width: 20px; height: 20px;"></a>
            <a href="http://www.instagram.com"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/1200px-Instagram_logo_2016.svg.png" alt="" style="width: 20px; height: 20px;"></a>
            <a href="http://www.twitter.com"><img src="https://hipertextual.com/files/2012/06/twitter-bird-white-on-blue.jpg" alt="" style="width: 20px; height: 20px;"></a></p> 
        <h1 class="display-4">Guayacan Aventura</h1>
       </div>
    
        <div class="header">
                <a href="./index.html" class="nav">Home</a>
                <a href="./nosotros.html" class="nav">Quienes Somos</a>
                <a href="./servicios.php" class="nav">Servicios</a>
                <a href="./registro.html" class="nav">Registrate</a>
                <a href="./imagenes.html" class="nav">Imagenes</a>
                <a href="./tabla.php" class="nav">Administrar Servicios</a>
                <a href="./email.html" class="nav">Formulario Contacto</a>

                     

        </div>

    <div>
        <br>

    <h1 class="display-4" style="text-align: center;">Administrar Servicios</h1>
 <br>
    <table class="table table-bordered">
        <tr class="bg-success" >
            <th>N° Ser.</th>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Empresa</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Precio</th>
            <th>Imagen</th>
            <th>Acciones</th>
            
        </tr>

        <?php
        
        $sql="SELECT id,nombre,direccion,empresa,telefono,email,precio,img FROM servicios";
        $resultado=mysql_query($sql,$conexion);

        while ($mostrar=mysql_fetch_assoc($resultado)) {
                   

        ?>

        <tr>
            <td><?php echo $mostrar ['id']?></td>
            <td><?php echo $mostrar ['nombre']?></td>
            <td><a href="<?php echo $mostrar ['direccion']?>">Click aca</a></td>
            <td><?php echo $mostrar ['empresa']?></td>
            <td><?php echo $mostrar ['telefono']?></td>
            <td><?php echo $mostrar ['email']?></td>
            <td><?php echo $mostrar ['precio']?></td>
            <td><a href="<?php echo $mostrar ['img']?>">Click para ver Imagen</a></td>
            <td><a href='modificar.php?id="<?php echo $mostrar['id']?>"'><button type="submit" class="btn btn-success">Modificar</button></a>&nbsp;<a href='eliminar.php?id="<?php echo $mostrar['id']?>"'><button type="submit" class="btn btn-danger">Borrar</button></a></td>
            <!--El href modificar.php y el eliminar.php tiene un identificador que es el id del servicio para poder modificar y eliminar en el formulario-->
        </tr>
        <?php
        }
        ?>
    </table>

    
    <h3 style="text-align:center; text-decoration: none;">Si desea agregar un nuevo servicio haga click en el boton <a href="insertar.php"><button type="submit" class="btn btn-info btn-lg" >Agregar</button></h3></a>
    <br><br>

        
    </div>

         <footer >
             <div></div>
            <h5>&nbsp;  Contacto</h5>
            <p>&nbsp; Telefono:+5693323452 <br>
               &nbsp; Email:guayacan-a@gmail.com </p>
        </footer>
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>