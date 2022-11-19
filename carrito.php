<?php

 require_once("class/class.php");
 $obj=new Trabajo();

?>

<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/letco_icon.png" type="">
    <title>Letco Opticos - Carrito</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html"><img width="250" src="images/Letco_header.png" alt="#" /></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Inicio<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Lentes<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="originales.html">Originales</a></li>
                                    <li><a href="basicos.html">Basicos</a></li>
                                    <li><a href="titanio.html">Titanio</a></li>
                                </ul>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="productos.html">Productos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="sucursales.html">Sucursales</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="nosotros.html">Nosotros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contacto.html">Contactanos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="carrito.php">
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                                 <g>
                                    <g>
                                       <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                          c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                    </g>
                                 </g>
                                 <g>
                                    <g>
                                       <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                          C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                          c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                          C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                    </g>
                                 </g>
                                 <g>
                                    <g>
                                       <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                          c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                    </g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                              </svg>
                                </a>
                            </li>
                            <form class="form-inline">
                                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                           <i class="fa fa-search" aria-hidden="true"></i>
                           </button>
                            </form>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
    </div>
    <!-- inner page section -->
    <section class="inner_page_head">
        <div class="container_fuild">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <h3>Carrito de Compras</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end inner page section -->
    <!-- product section -->
    <section class="product_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Carrito <span>de compras</span>
                </h2>
                <div id="prin_tabla" class="producto">
                             <div id="tabla">

                                 <?php $obj->carro(); ?>
                                  <?php
                                   if (isset($_SESSION["carro"])) {

                                        $totalcoste=0;
                                        $Total=0;
                                  ?>


                                  <table border="0">
                                      <tr>
                                            
                                          <th>Producto<br></th> 
                                          <th>Cantidad</th>
                                          <th>Peticion Normal</th>
                                          <th>Precio</th>
                                          <th>&nbsp;</th>
                                          <th>Total</th>
                                      </tr>

                                    <?php
                                         foreach ($_SESSION["carro"] as $key=>$valor) {
                                             $fi=$obj->getProductosPorId($key);
                                              foreach($fi as $fila){
                                                   $id=$fila["id"];
                                                   $producto=$fila["producto"];
                                                   $precio=$fila["precio"];
                                              }

                                              $coste=$precio*$valor;
                                              $totalcoste=$totalcoste+$coste;
                                              $Total=$Total+$valor;
                                    ?>

                                      <tr>
                                          <td><?php echo $producto; ?></td>
                                          <td><?php echo $valor; ?></td>
                                          <td>
                                              <a href="?id=<?php echo $id ?>&action=add"><img src="img/aumentar.png" alt="aumentar" title="aumentar"></a>
                                              <a href="?id=<?php echo $id ?>&action=remove"><img src="img/restar.png" alt="restar" title="restar"></a>
                                              <a href="?id=<?php echo $id ?>&action=removeProd"><img src="img/eliminar.png" alt="eliminar" title="eliminar"></a>
                                          </td>
                                          <td>
                                             <input onchange="add3(<?php echo $id ?>,'sum',$(this).val());" type="text" value="<?php echo $valor; ?>" class="input">
                                             <img onclick="add(<?php echo $id ?>,'add');" src="img/aumentar.png" alt="aumentar" title="aumentar">
                                             <img onclick="add(<?php echo $id ?>,'remove');" src="img/restar.png" alt="restar" title="restar">
                                             <img onclick="add(<?php echo $id ?>,'removeProd');" src="img/eliminar.png" alt="eliminar" title="eliminar">
                                          </td>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;=</td>
                                          <td style="width: 10px"><?php echo $coste ?></td>
                                       </tr>

                                     <?php } ?>

                                        <tr>
                                          <td colspan="5">Total</td>
                                          <td><?php echo $totalcoste ?></td>
                                        </tr>
                                    </table>
                              </div>

                         <?php
                            }
                             $_SESSION['totalcoste']=$totalcoste;
                             $_SESSION['cantidadTotal']=$Total;
                         ?>

                      </div>

                              <button onclick="window.location='comprar.php'" class="btn success">Finalizar compra</button>
                  </div>
                              <button onclick="window.location='productos.html'" class="btn success">Seguir comprando</button>
              </div>
            </div>
            
    </section>
    <!-- end product section -->

   <!-- footer section -->
   <footer class="footer_section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 footer-col">
                <div class="footer_contact">
                    <h4>
                        Contacto
                    </h4>
                    <div class="contact_link_box">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=19.26403416428%2C-98.892402648926&fbclid=IwAR0yt5B7ND_MXC0kI0y7DRbcf0AGWXo8Gb2yzUKHmCy92ynYwX80n1KZyps">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>
                  Ubicados en 
                  Av. Cuahutemoc oriente #23 56600 Chalco, State of Mexico, Mexico
                  </span>
                        </a>
                        <a href="https://wa.me/c/5215613809805">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>
                  Telefono +52 56 1380 9805
                  </span>
                        </a>
                        <a href="mailto:letcoopticos1@gmail.com">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>
                                letcoopticos1@gmail.com
                  </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 footer-col">
                <div class="footer_detail">
                    <a href="index.html" class="footer-logo">
               Lecto Opticos
               </a>
                    <p>
                       
                    </p>
                    <div class="footer_social">
                        <a href="https://facebook.com/LetcoOpticos/">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.instagram.com/opticosletco_oficial/">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 footer-col">
                <div class="map_container">
                    <div class="map">
                        <div id="googleMap"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-info">
            <div class="col-lg-7 mx-auto px-0">
                <p>
                    &copy; <span id="displayYear"></span> Todos los Derechos Reservados
                    <a href="https://web.facebook.com/LetcoOpticos/?_rdc=1&_rdr"></a><br> Distribuido Oficial <a href="https://web.facebook.com/LetcoOpticos/?_rdc=1&_rdr" target="_blank">Opticos Letco</a>
                    </p>
            </div>
        </div>
    </div>
</footer>
<!-- footer section -->
<!-- jQery -->
<script src="js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script>
</body>

</html>