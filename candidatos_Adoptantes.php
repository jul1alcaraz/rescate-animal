<?php
require_once __DIR__ . '/db-config.php';

$nombre_form = $_POST["Nombre"];
$apellido_form = $_POST["Apellido"];
$Date_form = $_POST["Date"];
$Localidad_form = $_POST["Localidad"];
$NumeroCelular_form = $_POST["NumeroCelular"];
$sugerencias_form = $_POST["sugerencias"];

$conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or exit("No se pudo conectar a base de datos");

$consulta = mysqli_prepare($conexion,
    "INSERT INTO candidatos_adoptantes
    VALUES (DEFAULT, ?, ?, ?, ?, ?, ?)");
mysqli_stmt_bind_param($consulta, "ssssss",
    $nombre_form, $apellido_form, $Date_form, $Localidad_form, $NumeroCelular_form, $sugerencias_form);
mysqli_stmt_execute($consulta);
mysqli_stmt_close($consulta);

mysqli_close($conexion);

header("Location: comunicate.php?ok");
