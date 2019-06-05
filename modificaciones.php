<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Modificaciones Centros Servicios Sociales</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <div id='cabecera'></div>
  <div class="row center">
        <h5 class="header col s12 light">Modificaciones Centros Municipales</h5>
  </div>


  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <!--<h1 class="header center black-text">Hola</h1>-->
      

    </div>
  </div>
  
<div class="row">
   <div class="col s12 offset-s3">
    <form class="col s12" name="datos" action="modificaciones.php" method="post">
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
   
<?php
     if($_SERVER['REQUEST_METHOD'] == 'POST') {
    include_once 'inc/db.inc.php';
    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
    if(mysqli_connect_errno()){
        echo "Fallo al conectar con la BBDD";
        exit();
        
    }
    mysqli_set_charset($conexion, "utf8");

    mysqli_select_db($conexion, $db_nombre)or die("No se encuentra la BBDD");
    mysqli_set_charset($conexion, "utf8");
    
    
    $cpostal=$_POST["cpostal"];
   
    
    //crea y ejecuta en MySQL query
    $sql=("Select Entidad, Direccion,cPostal,Ciudad,Telefono,Fax,Barrio from centros where cPostal= '$cpostal'") ;
    
    $result = $conexion->query($sql);
         
    if ($result->num_rows > 0) {
        foreach($conexion->query($sql) as $row){
   

            $datos[]= array(

            'Entidad'=> htmlentities($row['Entidad']),
            'Dirección'=>htmlentities($row['Direccion']),
            'cPostal' =>$row['cPostal'],
            'Ciudad' => $row['Ciudad'],
            'Telefono'=> $row['Telefono'],
            'Fax'=> $row['Fax'],
            'Barrios'=> $row['Barrio']);


        echo "
        <div class='row center'>
            <h5 class='header col s12 light'>Modifica los datos de los Centros Municipales</h5>
        </div>
        
    <div class='row'>
       <div class='col s12 offset-s3'>
        <form class='col s12' name='datos' action='actualizar.php' method='post'>
          <div class='row'>
            <div class='input-field col s6'>
              <input placeholder='Entidad' id='txtEntidad' type='text' class='validate' name='entidad' value='".$row['Entidad']."'>
              <label for='txtEntidad'>Entidad</label>
            </div>
          </div>
           <div class='row'>
            <div class='input-field col s6'>
              <input placeholder='Direcci&oacute;n' id='txtIsla' type='text' class='validate' name='direccion' value='".$row['Direccion']."'>
              <label for='txtDireccion'>Direcci&oacute;n</label>
            </div>
          </div>
           <div class='row'>
            <div class='input-field col s6'>
              <input placeholder='CPostal' id='txtCPostal' type='text' class='validate' name='cpostal' value='".$row['cPostal']."'>
              <label for='txtCPostal'>CPostal</label>
            </div>
          </div>
           <div class='row'>
            <div class='input-field col s6'>
              <input placeholder='Ciudad' id='txtCiudad' type='text' class='validate' name='ciudad' value='".$row['Telefono']."'>
              <label for='txtCiudad'>Ciudad</label>
            </div>
          </div>
           <div class='row'>
            <div class='input-field col s6'>
              <input placeholder='Tel&eacute;fono' id='txtTelefono' type='text' class='validate' name='telefono' value='".$row['Fax']."'>
              <label for='txtTelefono'>Tel&eacute;fono</label>
            </div>
          </div>
           <div class='row'>
            <div class='input-field col s6'>
              <input placeholder='Fax' id='txtFax' type='text' class='validate' name='fax' value='".$row['Entidad']."'>
              <label for='txtFax'>Fax</label>
            </div>
          </div>
           <div class='row'>
            <div class='input-field col s6'>
              <input placeholder='Placeholder' id='txtBarrios' type='text' class='validate' name='barrios' value='".$row['Barrio']."'>
              <label for='txtBarrios'>Barrios</label>
            </div>
          </div>
        <button class='btn waves-effect  red waves-light' type='submit' name='btnEnviar' id='btnEnviar'>Submit
            <i class='material-icons right'>send</i>
          </button>

        </form>

        </div>
      </div>
      "; 
} 

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
