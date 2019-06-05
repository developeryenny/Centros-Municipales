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
 
<!-- Go to www.addthis.com/dashboard to customize your tools -->
    
<body>
  <div id='cabecera'></div>
  <div class="row center">
        <h5 class="header col s12 light">Actualizaciones</h5>
  </div>
   

   <?php
    
    $entidad=$_POST["entidad"];
    $direccion=$_POST["direccion"];
    $cpostal=$_POST["cpostal"];
    $ciudad=$_POST["ciudad"];
    $telefono=$_POST["telefono"];
    $fax=$_POST["fax"];
    $barrios= $_POST["barrios"];

   /* $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "serviciosociales";
    */
     $servername = "localhost";
    $username = "u420342527_itcm";
    $password = "guerrera77";
    $dbname = "u420342527_itcm";
 
    
    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
  
   $sql = "Update centros set Entidad='$entidad', Direccion='$direccion', Ciudad='$ciudad', Telefono='$telefono', Fax='$fax', Barrio='$barrios' where cPostal='$cpostal'";
    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();
 
    // echo a message to say the UPDATE succeeded
         echo '<div class="card-panel #f1f8e9 light-green lighten-5">';
         echo $stmt->rowCount() . " records UPDATED successfully";
         echo '</div>';
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

echo "<div><a href='javascript:history.go(-1)' class='waves-effect waves-light btn'>VOLVER ATRÁS</a>";
echo  "<span>&nbsp; </span><a href='javascript:history.go(-2)' class='waves-effect waves-light btn'>INICIO</a></div>";
 
?>

<div id='pie'></div>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src='js/load.js'></script>

  </body>
</html>
