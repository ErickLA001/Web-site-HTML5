<?php
session_start();
$correo = $_SESSION['correo'];  
if(!empty($_GET['correo'])){
    //Credenciales de conexion
    $Host = 'localhost';
    $Username = 'root';
    $Password = '';
    $dbName = 'codigoqr';
    
    //Crear conexion mysql
    $db = new mysqli($Host, $Username, $Password, $dbName);
    
    //revisar conexion
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }
    
    //Extraer imagen de la BD mediante GET
    $result = $db->query("SELECT imagenperfil FROM `usuarios` WHERE `correo` = '$correo'");
    
    if($result->num_rows > 0){
        $imgDatos = $result->fetch_assoc();
        
        //Mostrar Imagen
        header("Content-type: image/jpg"); 
        echo $imgDatos['imagenperfil']; 
    }else{
        echo 'Imagen no existe...';
    }
}
?>