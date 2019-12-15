<!DOCTYPE html>
<!--seguridad/obligacion de llenar campos y validarlos/recuperar contrase;a/carteles de navegacion-->
<html lang="es" id="html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pong Cultural</title>
    <link rel="stylesheet" href="estiloshome.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
     
</head>
<body> 
  
    <!-- BARRA NAVEGACION - JUANI -->
<?php

?>
    <nav>
        <div>
            <ul>
                <li><a href="index.php"><b>Pong Cultural</b></a></li>
                <li class="secciones"><a href='noticiaDeSeccion.php?id_seccion=2'>Musica</a></li>
                <li class="secciones"><a href='noticiaDeSeccion.php?id_seccion=1'>Fotografia</a></li>
                <li class="secciones"><?php echo"<a href='ver-noticias.php'>///Panel Autor</a>";?> </li>
                <li class="secciones"><?php echo"<a href='panel-admin.php'>///Panel Admin</a>";?> </li>

                <li>
                    <label>
                        <button onClick="mostrarmenu()"></button>
                    </label>
                </li>
            </ul>
        </div>
    </nav>
    <!-- NAV OCULTO -->
    <div id="hamburguesa" class="menu-oculto" >        
        <i class="fa fa-times fa-5x" onClick="ocultarmenu()"></i>
        <div id="contenedor-menu">
            <div class="menu-superior"> 

                <div class="izquierda-20">
                    <div class="brand"><h1>Pong Cultural</h1></div>
                    <div class="ingresar"><h6></h6></div>
                    <div class="registrarme"><button><a href="registrarse.php">Registrate</a></button></div>
                </div>

                <div class="medio-40">
                    <div class="mi-cuenta"><h6></h6></div>
                    
                </div>

                <div class="derecha-40">
                    <div class="contenedor-mas-contenido">
                        <div class="menu-principal"><h6>Menu principal</h6></div>
                        <div class="conocenos"><a href=""><h3>Conocenos</h3></a></div>
                        <div class="contacto"><a href=""><h3>Contacto</h3></a></div>
                    </div>    
                </div>

            </div>
            <div class="footer-menu">
                <ul>
                    <li><a href=""></a></li>
                    <li><a href="login.php">log-in</a></li>
                    <li><a href="logout.php">log-out</a></li>
                </ul>
            </div> 
        </div>

        
    </div>
    <!-- FIN - NAV OCULTO -->
    <!-- FIN BARRA NAVEGACION -->


    <!-- HEADER / BANNER - MARIETTA -->
<?php
    
    $conexion = mysqli_connect("localhost", "id11888568_glaraanabelperez", "30608545", "id11888568_pongcultural");
    $sql = "select * from noticia 
where activo='1'
ORDER BY fecha desc LIMIT 4"; 

$respuesta = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_array($respuesta);
    $id_noticia = $fila["id"];
    $fecha = $fila["fecha"];
    $titulo = $fila["titulo"];
    $subtitulo = $fila["subtitulo"]; 
?>
    <header>
        <div class="m_containerheader">
    
            <div class="m_caja1izq_containerheader">
                <h2 class="bloque1">0.4</h2>
                <h3 class="bloque2">
                    <?php echo"$subtitulo"; ?>
                </h3>
                <h4 class="bloque3"><?php echo"$titulo"; ?></h4>
            </div>
<?php
    $fila = mysqli_fetch_array($respuesta);
    $id_noticia = $fila["id"];
    $fecha = $fila["fecha"];
    $titulo = $fila["titulo"];
    $subtitulo = $fila["subtitulo"]; 
?>  
            <div class="m_bochadecajas">
                <div class="m_containerarriba">
                    <div class="m_caja2izq_containerheader">
                        <h2 class="mtextocerati">
                        #<?php echo"$titulo"; ?></h2>
                        </div>
<?php
    $fila = mysqli_fetch_array($respuesta);
    $id_noticia = $fila["id"];
    $fecha = $fila["fecha"];
    $titulo = $fila["titulo"];
    $subtitulo = $fila["subtitulo"]; 
?>
                    <div class="m_caja4_containerheader">
                        <h2 class="mtextoleguas">
                        0.2 <?php echo"$titulo"; ?>
                        </div>
<?php
    $fila = mysqli_fetch_array($respuesta);
    $id_noticia = $fila["id"];
    $fecha = $fila["fecha"];
    $titulo = $fila["titulo"];
    $subtitulo = $fila["subtitulo"]; 
?>
                    <div class="m_caja5dere_containerheader"></div>
                </div>
    
                <div class="m_containerabajo">
    
                    <div class="m_caja3izq_containerheader">
                            <h2 class="mbienvenidos">*bienvenidos*</h2>
                            <img class="gatito" src="imagenes/logopongweb.jpg" alt="logo-cultural">
                    </div>
    
                    <div class="m_caja6dere_containerheader">
                            <h2 class="mtextoanita">0.3 <?php echo"$titulo"; ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- FIN HEADER / BANNER -->

    <!-- MAIN CON SECCIONES Y ARTICULOS - 1 C/U -->
    <main>
    <!-- JUANI MUSICA -->
<?php
    
    $conexion = mysqli_connect("localhost", "id11888568_glaraanabelperez", "30608545", "id11888568_pongcultural");
    $sql = "select noticia.id, noticia.fecha, noticia.titulo, 
noticia.subtitulo, noticia.imagen_1 from noticia 
where activo='1' and seccion_id=2
ORDER BY fecha desc LIMIT 3"; 

$respuesta = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_array($respuesta);
    $id_noticia = $fila["id"];
    $fecha = $fila["fecha"];
    $titulo = $fila["titulo"];
    $subtitulo = $fila["subtitulo"];
    $imagen_1 = $fila["imagen_1"];
?>
            <section>
                <div class="contenedor-musica">

                    <div class="bloque">
                        <article class="sesenta">
                            <div class="titulo"  data-aos="fade-up"><a href='noticiaDeSeccion.php?id_seccion=2'><h1 id="spinetta">Música</h1></a></div>
                            <div class="contenedor-comentario">                 
                                <div class="comentario">
                                    <p><?php echo"$titulo";?></p>
                                    <p class="by"><?php echo"$subtitulo";?></p>
                                </div>  
                            </div>

                            <div class="boton-conocer" data-aos="fade-left"
                            data-aos-anchor="#example-anchor"
                            data-aos-offset="500"
                            data-aos-duration="1000">
                             <?php  echo"<button><a href='noticia.php?id_noticia=$id_noticia'>Ver +</a></button>"?>   
                                <div class="invisible"></div>
                            </div>                
                        </article>
                        
                        <article class="cuarenta">
                            <div class="imagen-1">
                                <img src=<?php echo"$imagen_1";?> alt="imagen_noticia">
                            </div>
                        </article>
                    </div>
<br>
<hr>
<br>
<?php
$fila = mysqli_fetch_array($respuesta);
    $id_noticia = $fila["id"];
    $fecha = $fila["fecha"];
    $titulo = $fila["titulo"];
    $subtitulo = $fila["subtitulo"];
    $imagen_1 = $fila["imagen_1"];
?>
                    <div class="bloque">    
                        <article class="cuarenta">
                            <div class="imagen-1">
                                <img src=<?php echo"$imagen_1";?> alt="imagen_noticia">
                            </div>
                            <div class="info-noticia">    
                                <div> 
                                    <?php echo"<a href='noticia.php?id_noticia=$id_noticia'>
                                        <p class='titulo-noticia' data-aos='fade-right'>$titulo ...Ver +</p></a>";?>
                                </div>
                                <div>
                                    <p class="extra-noticia">
                                    <?php echo"$subtitulo";?>
                                    </p>
                                </div>
                                
                            </div>
                        </article>
<?php
$fila = mysqli_fetch_array($respuesta);
    $id_noticia = $fila["id"];
    $fecha = $fila["fecha"];
    $titulo = $fila["titulo"];
    $subtitulo = $fila["subtitulo"];
    $imagen_1 = $fila["imagen_1"];
?>                    
                        <article class="sesenta">
                            <div class="noticia-sesenta">
                                <div class="imagen-2">
                                   <img src=<?php echo"$imagen_1";?> alt="imagen_noticia">
                                </div>
                                <div class="info-noticia">    
                                    <div>
                                    <?php echo"<a href='noticia.php?id_noticia=$id_noticia'>
                                        <p class='titulo-noticia' data-aos='fade-right'>$titulo ...Ver +</p></a>";?>
                                    </div>
                                    <div>
                                        <p class="extra-noticia">
                                        <?php echo"$subtitulo";?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>            
            </section>
    <!-- FIN MUSICA -->
<!-- LARA FOTOGRAFIA -->
<?php 
$conexion = mysqli_connect("localhost", "id11888568_glaraanabelperez", "30608545", "id11888568_pongcultural");
$sql = "select noticia.id, noticia.fecha, noticia.titulo, 
noticia.subtitulo, noticia.imagen_1 from noticia 
where activo='1' and seccion_id=1
ORDER BY fecha desc LIMIT 3"; 

$respuesta = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_array($respuesta);
    $id_noticia = $fila["id"];
    $fecha = $fila["fecha"];
    $titulo = $fila["titulo"];
    $subtitulo = $fila["subtitulo"];
    $imagen_1 = $fila["imagen_1"];
?>
            <section>
                <div class="contenedor-musica">

                    <div class="bloque">
                        <article class="sesenta">
                            <div class="titulo"  data-aos="fade-up"><a href='noticiaDeSeccion.php?id_seccion=1'><h1 id="foto">Foto</h1></a></div>
                            <div class="contenedor-comentario">                 
                                <div class="comentario">
                                <?php echo"<a href='noticia.php?id_noticia=$id_noticia'>
                                        <p class='titulo-noticia' data-aos='fade-right'>$titulo ...Ver +</p></a>";?>
                                    <p class="by"><?php echo"$subtitulo";?></p>
                                </div>  
                            </div>

                            <div class="boton-conocer" data-aos="fade-left"
                            data-aos-anchor="#example-anchor"
                            data-aos-offset="500"
                            data-aos-duration="1000">
                            <a href="noticia.php?id_noticia=<?php echo "$id_noticia";?>"><button>Conocer más</button></a> 
                                <div class="invisible"></div>
                            </div>                
                        </article>
                        
                        <article class="cuarenta">
                            <div class="imagen-1">
                                <img src=<?php echo"$imagen_1";?> alt="imagen_noticia">
                            </div>
                        </article>
                    </div>
<br>
<hr>
<br>
<?php
$fila = mysqli_fetch_array($respuesta);
    $id_noticia = $fila["id"];
    $fecha = $fila["fecha"];
    $titulo = $fila["titulo"];
    $subtitulo = $fila["subtitulo"];
    $imagen_1 = $fila["imagen_1"];
?>
                    <div class="bloque">    
                        <article class="cuarenta">
                            <div class="imagen-1">
                                <img src=<?php echo"$imagen_1";?> alt="imagen_noticia">
                            </div>
                            <div class="info-noticia">    
                                <div> 
                                <?php echo"<a href='noticia.php?id_noticia=$id_noticia'>
                                        <p class='titulo-noticia' data-aos='fade-right'>$titulo ...Ver +</p></a>";?>
                                    
                                </div>
                                <div>
                                    <p class="extra-noticia">
                                    <?php echo"$subtitulo";?>
                                    </p>
                                </div>
                            </div>
                        </article>
<?php
$fila = mysqli_fetch_array($respuesta);
    $id_noticia = $fila["id"];
    $fecha = $fila["fecha"];
    $titulo = $fila["titulo"];
    $subtitulo = $fila["subtitulo"];
    $imagen_1 = $fila["imagen_1"];
?>                    
                        <article class="sesenta">
                            <div class="noticia-sesenta">
                                <div class="imagen-2">
                                   <img src=<?php echo"$imagen_1";?> alt="imagen_noticia">
                                </div>
                                <div class="info-noticia">    
                                    <div>
                                    <?php echo"<a href='noticia.php?id_noticia=$id_noticia'>
                                        <p class='titulo-noticia' data-aos='fade-right'>$titulo ...Ver +</p></a>";?>
                                    </div>
                                    <div>
                                        <p class="extra-noticia">
                                        <?php echo"$subtitulo";?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>            
            </section>
    </main>        
<!-- FIN FOTOGRAFIA -->
<!-- FOOTER -->
<br>
<br>
<hr>
<footer>
        
        <div class="foot-div-1">
          
                <h3>Links Rapidos</h3>
                <ul>
                    <li><a href="registrarse.php">Ragistrate</a></li>
                    <li><a href="admin.php">Admin</a></li>
                    <li><a href="login.php">Log-in</a></li>
                    <li><a href="logout.php">Log-out</a></li>
                </ul>
        </div>
            
        <div class="foot-div-2">
                <h3>Redes</h3>
                <ul>
                    <li><a href="www.facebook.com">facebook</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Twiter</a></li>
                </ul>
        </div>

        <div class="foot-div-3">
               
            
            
        </div>

        <div class="foot-div-4">
            <h3>Newslatter</h3>
            <div>
                    <input type="text" placeholder="Email adress" name="mail" required>
                    <input class="boton-submit" type="submit" value="subscribe">
            </div>
           
        </div>


    </footer>
<!-- FIN FOOTER -->

<!-- SCRIPTS -->
    <script src="js/wow.min.js"></script>
    <script>new WOW().init();</script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>AOS.init();</script>
    <script src="jshome.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typeit@6.0.3/dist/typeit.min.js"></script>

</body>
</html>