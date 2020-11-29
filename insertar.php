

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="modificar.css">
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
                <a href="#" class="nav">Quienes Somos</a>
                <a href="./servicios.php" class="nav">Servicios</a>
                <a href="./registrate.html" class="nav">Registrate</a>
                <a href="./imagenes.html" class="nav">Imagenes</a>
                <a href="./tabla.php" class="nav">Administrar Servicios</a>
                <a href="./email.html" class="nav">Formulario Contacto</a>


                


           

        </div>

        <br>

    <div class="contenido">
      
            <h2 class="display-4" style="text-align: center;">Ingresar Servicio</h2><br>

    <form action="insertar2.php" method="post">
        
        <input type="hidden" id="id" name="id" value="<?php echo $consulta[0]?>"> 
        <p>Nombre <input type="text" class="form-control" id="nom" name="nom" > </p>
        <p>Descripcion <input type="text" class="form-control" id="desc" name="desc" > </p>
        <p>Direccion <input type="text" class="form-control" id="dir" name="dir"> </p>
        <p>Empresa <input type="text" class="form-control" id="emp" name="emp" > </p>
        <p>Telefono <input type="text" class="form-control" id="tel" name="tel" > </p>
        <p>E-Mail <input type="text" class="form-control" id="mail" name="mail"> </p>
        <p>Precio <input type="text" class="form-control" id="pre" name="pre" > </p>
        <p>Imagen (Ingrese URL) <input type="text" class="form-control" id="img" name="img"> </p>
        <br>
        
        <button type="submit" class="btn btn-success">Agregar</button>

    </form>

    <?php
    
    include 'conexion.php';

    

    
    ?>

        
    </div>

         <footer>
             <div></div>
            <h5>&nbsp;  Contacto</h5>
            <p>&nbsp; Telefono:+5693323452 <br>
               &nbsp; Email:guayacan-a@gmail.com </p>
        </footer>
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>