<?php
$nombre_form = $_POST ["Nombre"];
$apellido_form = $_POST ["Apellido"];
$Date_form = $_POST ["Date"];
$Localidad_form = $_POST ["Localidad"];
$NumeroCelular_form = $_POST ["NumeroCelular"];
$sugerencias_form = $_POST ["sugerencias"];

/*conexion a base de datos. INSERT
$conexion = mysqli_connect("localhost", "root", "", "rescate_animal") or exit("No se pudo conectar a base de datos");*/


$conexion = mysqli_connect("localhost", "id20275451_ulises01", "!R|7rh^EG}~yJJ?)", "id20275451_rescate_animal") or exit("No se pudo conectar a base de datos");

//CONAULTA//
mysqli_query( $conexion, "INSERT INTO candidatos_adoptantes 
VALUES (DEFAULT, '$nombre_form', '$apellido_form', '$Date_form', '$Localidad_form', '$NumeroCelular_form', '$sugerencias_form') " );

mysqli_close($conexion);

header ("Location: comunicate.php?ok");

