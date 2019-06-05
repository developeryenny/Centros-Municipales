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
        <h5 class="header col s12 light">Altas Centros Municipales</h5>
  </div>
  
  


<div class="container">
    <div class="row">
       <div class="col s12 offset-s3">
        <form class="col s12" name="datos" action="index.php" method="post">
          <div class="row">
            <div class="input-field col s6">
              <input placeholder="Entidad" id="txtEntidad" type="text" class="validate" name="entidad">
              <label for="txtEntidad">Entidad</label>
            </div>
          </div>
           <div class="row">
            <div class="input-field col s6">
              <input placeholder="Direcci&oacute;n" id="txtIsla" type="text" class="validate" name="direccion">
              <label for="txtDireccion">Direcci&oacute;n</label>
            </div>
          </div>
           <div class="row">
            <div class="input-field col s6">
              <input placeholder="CPostal" id="txtCPostal" type="text" class="validate" name="cpostal">
              <label for="txtCPostal">CPostal</label>
            </div>
          </div>
           <div class="row">
            <div class="input-field col s6">
              <input placeholder="Ciudad" id="txtCiudad" type="text" class="validate" name="ciudad">
              <label for="txtCiudad">Ciudad</label>
            </div>
          </div>
           <div class="row">
            <div class="input-field col s6">
              <input placeholder="Tel&eacute;fono" id="txtTelefono" type="text" class="validate" name="telefono">
              <label for="txtTelefono">Tel&eacute;fono</label>
            </div>
          </div>
           <div class="row">
            <div class="input-field col s6">
              <input placeholder="Fax" id="txtFax" type="text" class="validate" name="fax">
              <label for="txtFax">Fax</label>
            </div>
          </div>
           <div class="row">
            <div class="input-field col s6">
              <input placeholder="Placeholder" id="txtBarrios" type="text" class="validate" name="barrios">
              <label for="txtBarrios">Barrios</label>
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
    if(mysqli_connect_errno()){
        echo "Fallo al conectar con la BBDD";
        exit();
        
    }
    mysqli_set_charset($conexion, "utf8");

    mysqli_select_db($conexion, $db_nombre)or die("No se encuentra la BBDD");
    mysqli_set_charset($conexion, "utf8");
    
    $entidad=$_POST["entidad"];
    $direccion=$_POST["direccion"];
    $cpostal=$_POST["cpostal"];
    $ciudad=$_POST["ciudad"];
    $telefono=$_POST["telefono"];
    $fax=$_POST["fax"];
    $barrios= $_POST["barrios"];
    
    $sql = "INSERT INTO centros (Entidad, Direccion, cPostal, Ciudad, Telefono, Fax, Barrio)
    VALUES ('$entidad', ' $direccion', '$cpostal', '$ciudad','$telefono','$fax','$barrios')";

    if ($conexion->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
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
