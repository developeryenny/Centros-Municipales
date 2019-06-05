<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Consultas Centros Servicios Sociales</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <div id='cabecera'></div>
  <div class="row center">
        <h5 class="header col s12 light">Consultas Centros Municipales</h5>
  </div>

  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <!--<h1 class="header center black-text">Hola</h1>-->
    </div>
  </div>
  
  
  

<div class="row">
   <div class="col s12 offset-s3">
    <form class="col s12" name="datos" action="consultas.php" method="post">
       <div class="row">
        <div class="input-field col s6">
          <input placeholder="CPostal" id="txtCPostal" type="text" class="validate" name="cpostal">
          <label for="txtCPostal">CPostal</label>
        </div>
      </div>
      
    <button class="btn waves-effect  red waves-light" type="submit" name="btnEnviar" id="btnEnviar">Submit
    	<i class="material-icons right">send</i>
    	<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-591c5b594ab46237"></script> 
  	  </button>
      
    </form>
 
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
  
    //crea y ejecuta en MySQL query
    $sql=("Select Entidad, Direccion,cPostal,Ciudad,Telefono,Fax,Barrio from centros where cPostal= '$cpostal'") ;
         
    
    $result = $conexion->query($sql);
     
         
    if ($result->num_rows > 0) {

        echo '<ul>';
        foreach($conexion->query($sql) as $row){

            $datos[]= array(

            'Entidad'=> htmlentities($row['Entidad']),
            'Dirección'=>htmlentities($row['Direccion']),
            'cPostal' =>$row['cPostal'],
            'Ciudad' => $row['Ciudad'],
            'Telefono'=> $row['Telefono'],
            'Fax'=> $row['Fax'],
            'Barrios'=> $row['Barrio']
			);

    
            echo '<div class="card-panel #f1f8e9 light-green lighten-5">';
               echo '&nbsp;&nbsp;<b>Entidad:</b> &nbsp'.htmlentities($row['Entidad']).'&nbsp;<b>Direcci&oacute;n:</b>&nbsp'.htmlentities($row['Direccion']).
                         '&nbsp;<b>CPostal:</b>&nbsp '.htmlentities($row['cPostal']).'&nbsp;<b>Ciudad</b>&nbsp'.htmlentities($row['Ciudad']).
                       '&nbsp;<b>Telefono:</b>&nbsp'.htmlentities($row['Telefono']).'&nbsp;<b>Fax:</b>&nbsp'.htmlentities($row['Fax']).'&nbsp;<b>Barrios:</b>&nbsp'.htmlentities($row['Barrio']);


            echo'</div>';

      
        }

        echo '</ul>'; 
        }else {
    
            echo  '<div class="card-panel #fafafa grey lighten-5">No se han encontrado resultados</div>';
            

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

  </body>
</html>
