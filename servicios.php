<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="servicios.css">
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

           <h1 class="display-4" style="text-align: center;">Servicios</h1>


        
        <div class="container mt-3">
               <div class="row">
                   
                       <?php 

                            include 'conexion.php';

                            $sql="SELECT id,nombre,descripcion,img FROM servicios";
                            $resultado=mysql_query($sql);

                            while ($row=mysql_fetch_row($resultado)){
                        ?>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card">
                        <img class="card-img-top" src="<?php echo $row[3];?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row[1];?></h5>
                            <p class="card-text"><?php echo $row[2];?></p>
                            <a href='venta.php?id="<?php echo $row[0];?>"' class="btn btn-success">Comprar Servicio</a>
                        </div>
                    </div>
              </div>  
                      
                  <?php 
                       }
                  ?>

                  
               </div>
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