<?php
@session_start();
unset($_SESSION["correo"]); 
unset($_SESSION["contra"]);
session_destroy();
header("Location: index.html");
?>