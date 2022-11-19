<?php  
include('conexion.php');
include("login.html");

$correo = $_POST["correo"];
$contra = $_POST["contra"]; 

if ($conexion ->connect_error) {
    die("Connection failed: " . $conexion ->connect_error);
  }
   
  // Consulta segura para evitar inyecciones SQL.
  $result = mysqli_query($conexion,"SELECT * FROM `clientes` WHERE `correo` =  '$correo' AND `pasword` =  '$contra' ") or die (mysqli_error($conexion));

if($row = mysqli_fetch_assoc($result)){
session_start();
  $_SESSION['correo'] = $correo;
  header('Location: ');
  //Aqui lo redireccionas al lugar que quieras.
     die() ;
}else{
  echo 'El email o password es incorrecto, <a href="login.html">vuelva a intenarlo</a>.<br/>';
exit();
}
?>