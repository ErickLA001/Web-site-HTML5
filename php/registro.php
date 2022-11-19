<?php
include('conexion.php');
include("registro.html");


$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$matricula = $_POST["matricula"];
$grupo = $_POST["grupo"];
$carrera = $_POST["carrera"];
$correo = $_POST["correo"];
$contra = $_POST["contra"];



mysqli_query($conexion,"INSERT INTO `usuarios`(`matricula`, `nombre`, `apellido`, `grupo`, `carrera`, `correo`, `contra`) VALUES ('$matricula','$nombre','$apellido','$grupo','$carrera','$correo','$contra')") or die (mysqli_error($conexion));

$conexion->close();

?>