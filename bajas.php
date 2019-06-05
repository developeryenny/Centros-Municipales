<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Bajas Centros Servicios Sociales</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
 
 <div id='cabecera'></div>
  <div class="row center">
        <h5 class="header col s12 light">Bajas Centros Municipales</h5>
  </div>


<div class="container">
    <div class="row">
       <div class="col s12 offset-s3">
        <form class="col s12" name="datos" action="bajas.php" method="post">  
           <div class="row">
            <div class="input-field col s6">
              <input placeholder="CPostal" id="txtCPostal" type="text" class="validate" name="cpostal">
              <label for="txtCPostal">CPostal</label>
            </div>
          </div>
            <button class="btn waves-effect  red waves-light" type="submit" name="btnEnviar" id="btnEnviar">Submit
            <i class="material-icons right">send</i>
          </button>

        </form>
    </div>
  </div>
</div>
  
   
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    include_once 'inc/db.inc.php';
         
    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
         
    if ($conexion->connect_error) {
        die("Fallo al conectar con la BBDD: " . $conn->connect_error);
    } 

    mysqli_set_charset($conexion, "utf8");

         
    $cpostal=$_POST["cpostal"];
    
    /*
    define('MYSQL_ASSOC',MYSQLI_ASSOC);
  
    //crea y ejecuta en MySQL query
    $consulta=("Select Entidad, Dirección,cPostal,Ciudad,Telefono,Fax,Barrio from centros where cPostal= '$cpostal'");
    $resultados= mysqli_query($conexion, $consulta);

    while($fila = mysqli_fetch_array($resultados, MYSQL_ASSOC) ){ 
        
      
           echo $fila['Entidad'];
           echo $fila['Dirección'];
           echo $fila['cPostal'];
           echo $fila['Ciudad'];
           echo $fila['Telefono'];
           echo $fila['Fax'];
           echo $fila['Barrio'];
  
    
    }
    */
    
    if ($cpostal!="" ) {
        
        $sql=("delete from centros where cPostal= '$cpostal'") ;
        if ($conexion->query($sql) === TRUE){

                echo '<div class="card-panel #f1f8e9 light-green lighten-5">';
                echo 'Record deleted successfully';
                echo'</div>';

            }
            else {
                echo  '<div class="card-panel #fafafa grey lighten-5">Error al borrar el registro, este registro no existe:</div>';
        }
    }else{
         echo  '<div class="card-panel #fafafa grey lighten-5">Ingresa el código postal del Centro que quieras eliminar. por favor</div>';
    }
    
    $conexion->close();
}

    
    
 
  
?>
  
  
  
 
 <div id='pie'></div>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src='js/load.js'></script>
<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-591c5b594ab46237"></script> 
  </body>
</html>

  