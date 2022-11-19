<?php
include_once "conexion.php";


// 2) Preparar la orden SQL
$consulta= "SELECT * FROM `usuarios` WHERE `correo` = '$correo'";
$datos= mysqli_query($conexion,$consulta);

// 4) Ir Imprimiendo las filas resultantes
while ($fila =mysqli_fetch_array($datos)){
//echo "<p">;
echo $fila ["nombre"];
echo "-"; // un separador
echo $fila ["matricula"];
echo "</p>";
} 
?>
<html> <div><a href="cerrar_sesion.php">Cerrar Sesión</a></div></html>
