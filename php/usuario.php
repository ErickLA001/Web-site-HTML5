<?php
session_start();
include_once 'conexion.php';
$contra = $_SESSION['contra'];
$correo = $_SESSION['correo'];
class User{
    public function userExists($correo, $contra){
        $md5pass = md5($contra);

        $query = $this->mysqli_query->prepare("SELECT * FROM `usuarios` WHERE `correo` =  '$correo' AND `contra` =  '$contra' ");
        $query->execute(['correo' => $correo, 'contra' => $md5pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($correo){
        $query = $this->mysqli_query->prepare("SELECT * FROM `usuarios` WHERE `correo` =  '$correo'");
        $query->execute(['correo' => $correo]);

        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nombre'];
            $this->username = $currentUser['correo'];
        }
    }

    public function getNombre(){
        return $this->nombre;
    }
}

?>