<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Alta Centros Servicios Sociales</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <div id='cabecera'></div>
  <div class="row center">
        <h5 class="header col s12 light">Listado de Centros Municipales</h5>
  </div>
  
<?php
    include_once 'inc/db.inc.php';
         
    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
         
    if ($conexion->connect_error) {
        die("Fallo al conectar con la BBDD: " . $conn->connect_error);
    } 

    mysqli_set_charset($conexion, "utf8");

         
  
    //crea y ejecuta en MySQL query
    $sql="Select Entidad, Direccion,cPostal,Ciudad,Telefono,Fax,Barrio from centros";
         
         
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
            'Barrios'=> $row['Barrio']);

            echo '<div class="row">';
                echo '<div class="card-panel #f1f8e9 light-green lighten-5">&nbsp;&nbsp;<b>Entidad:</b> &nbsp'.htmlentities($row['Entidad']).'&nbsp;<b>Direcci&oacute;n:</b>&nbsp'.htmlentities($row['Direccion']).
                '&nbsp;<b>CPostal:</b>&nbsp '.htmlentities($row['cPostal']).'&nbsp;<b>Ciudad</b>&nbsp'.htmlentities($row['Ciudad']).
                '&nbsp;<b>Telefono:</b>&nbsp'.htmlentities($row['Telefono']).'&nbsp;<b>Fax:</b>&nbsp'.htmlentities($row['Fax']).'&nbsp;<b>Barrios:</b>&nbsp'.htmlentities($row['Barrio']);
            echo'</div>';

      
        }

        echo '</ul>'; 
        }else {
    
            echo  '<div class="card-panel #fafafa grey lighten-5">No se han encontrado resultados</div>';
            

        }
            $conexion->close();
  
?>




 <div id='pie'></div>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src='js/load.js'></script>

  </body>
</html>
