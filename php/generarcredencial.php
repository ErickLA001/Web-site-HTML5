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
    <title>Formulario de Tarjeta de Crédito Dinámico</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/PROYECTO/css/credencial.css">
    <link rel="stylesheet" href="/PROYECTO//css/iniciolog.css">
    <link rel="stylesheet" href="/PROYECTO//css/menu.css">
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
                <a href="/PROYECTO/credencial.php" class="nav__items nav__items--cta">Regresar</a>
            </nav>
        </div>
    </header>
    <div class="contenedor">

        <!-- Tarjeta -->
        <section class="tarjeta" id="tarjeta">
            <div class="delantera">
                <div class="logo-marca" id="logo-marca">
                    <img src='vistaperfil.php?correo=correo' alt='Img blob desde MySQL' width="60" />
                </div>
                <img src="img/TESCHA.jfif" class="chip" alt="">
                <div class="datos">
                    <div class="grupo" id="numero">
                        <p class="label">Matricula</p>
                        <p class="numero"><?php
                        echo $fila ["matricula"]; ?></p>
                    </div>
                    <div class="flexbox">
                        <div class="grupo" id="nombre">
                            <p class="label">Nombre</p>
                            <p class="nombre"><?php echo $fila ["nombre"]; 
                                                      echo " ";
                                                      echo $fila ["apellido"];?></p>
                                                      <?php 
                        }
                        ?>

                        </div>
                    
                        <!--<div class="grupo" id="expiracion">
                            <p class="label">Fecha</p>
                            <p class="expiracion"><span class="mes">MM</span> / <span class="year">AA</span></p>
                        </div>-->
                    </div>
                </div>
            </div>

            <div class="trasera">

                <!--<div class="barra-magnetica"></div>-->
                <div class="datos">
                    <div class="grupo" id="firma">
                        <p class="label">Firma</p>
                        <div class="firma"><p></p></div>
                    </div>

                    <div class="grupo" id="ccv">
                        <p class="label">QR</p>
                        <img src='vistaqr.php?correo=correo' alt='Img blob desde MySQL' width="90" />
                    </div>
                </div>
                <p class="leyenda">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus exercitationem, voluptates illo.</p>
                <a href="#" class="link-banco">https://tescha.edomex.gob.mx/</a>
            </div>
        </section>

        <!-- Contenedor Boton Abrir Formulario -->
        <div class="contenedor-btn">
            <button class="btn-abrir-formulario" id="btn-abrir-formulario">
                <i class="fas fa-plus"></i>
            </button>
        </div>

        <!-- Formulario -->
        <form action="" id="formulario-tarjeta" class="formulario-tarjeta">
            <div class="grupo">
                <label for="inputNumero">Matricula</label>
                <input type="text" id="inputNumero" maxlength="19" autocomplete="off">
            </div>
            <div class="grupo">
                <label for="inputNombre">Nombre</label>
                <input type="text" id="inputNombre" maxlength="19" autocomplete="off">
            </div>
            <div class="flexbox">
                <div class="grupo expira">
                    <label for="selectMes">Egreso</label>
                    <div class="flexbox">
                    <div class="grupo-select">
                            <select name="mes" id="selectMes">
                            <option disabled selected>Mes</option>
                            </select>
                            <i class="fas fa-angle-down"></i>
                        </div>
                        <div class="grupo-select">
                            <select name="year" id="selectYear">
                                <option disabled selected>Año</option>
                            </select>
                            <i class="fas fa-angle-down"></i>
                        </div>
                    </div>
                </div>

                <!--<div class="grupo ccv">
                    <label for="inputCCV">CCV</label>
                    <input type="text" id="inputCCV" maxlength="3">
                </div>-->
            </div>
            <button type="submit" class="btn-enviar">Enviar</button>
        </form>
    </div>

    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="js/credencial.js"></script>
</body>
</html>