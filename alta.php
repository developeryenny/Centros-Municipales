<?php
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

  
?>
