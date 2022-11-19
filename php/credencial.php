<?php
session_start();
include("conexion.php");

$correo = $_SESSION['correo'];  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuario</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/PROYECTO/css/usuario.css">
    <link rel="stylesheet" href="/PROYECTO/css/iniciolog.css">
    <link rel="stylesheet" href="/PROYECTO/css/menu.css">
</head>

<body>
<?php 
   $consulta= "SELECT matricula, nombre, apellido FROM `usuarios` WHERE `correo` = '$correo'";
$datos= mysqli_query($conexion,$consulta);

// 4) Ir Imprimiendo las filas resultantes
while ($fila =mysqli_fetch_array($datos)){
?>
    <header class="hero">
                <div class="container">
                    <nav class="nav">
                        <a href="/PROYECTO/generarcredencial.php" class="nav__items nav__items--cta">Generar credencial</a>
                        <a href="/PROYECTO/cerrar_sesion.php" class="nav__items nav__items--cta">Cerrar Sesión</a>
                    </nav>
                </div>
            </header>
    <div class="contenedor">

        <!-- Tarjeta -->
        <section class="tarjeta" id="tarjeta">
            <div class="delantera">
                <div class="datos">
                    <div class="grupo" id="matricula">
                        <td class="label">Matricula</td>
                        <td class="numero"> <?php
                        echo $fila ["matricula"]; ?></td>
                    </div>
                    <div class="flexbox">
                        <div class="grupo" id="nombre">
                            <td class="label">Nombre</td>
                            <td class="nombre"> <?php echo $fila ["nombre"]; 
                                                      echo " ";
                                                      echo $fila ["apellido"];?>  </td>
                        </div>
                        <body bgcolor="#bed7c0">
                        <div class="main">
                        <h1>Foto de perfil</h1>
                        <div class="panel panel-primary">
                        <div class="panel-body">
                        <img src='vistaperfil.php?correo=correo' alt='' width="100" />      
                        </div> 
                            </div>
                        </div>
                        </body>
                        <body bgcolor="#bed7c0">
                        <div class="main">
                        <h1>QR</h1>
                        <div class="panel panel-primary">
                        <div class="panel-body">
                        <img src='vistaqr.php?correo=correo' alt='Img blob desde MySQL' width="100" />

                        </div> 
                            </div>
                        </div>
                        </body>
                            <?php 

                        }
                        ?>
                        
                    </div>
                </div>
            </div>
        </section>

        <form name="MiForm" id="MiForm" method="post" action="cargarfoto.php" enctype="multipart/form-data">
        <h2>Imagen de Perfil</h2>
        <h4 class="text-center">Seleccione imagen a cargar</h4>
        <div class="form-group">
            <label class="col-sm-2 control-label">Archivos</label>
            <div class="col-sm-8">
                <input type="file" class="form-control" id="image" name="image" multiple>
            </div>
            <button name="submit" class="btn btn-primary">Cargar Imagen</button>
        </div>
    </form>
    <form name="MiForm" id="MiForm" method="post" action="cargarqr.php" enctype="multipart/form-data">
        <h2>Imagen QR</h2>
        <h4 class="text-center">Seleccione imagen a cargar</h4>
        <div class="form-group">
            <label class="col-sm-2 control-label">Archivos</label>
            <div class="col-sm-8">
                <input type="file" class="form-control" id="image" name="image" multiple>
            </div>
            <button name="submit" class="btn btn-primary">Cargar Imagen</button>
        </div>
    </form>
    </div>

    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="/js/credencial.js"></script>
</body>

</html>