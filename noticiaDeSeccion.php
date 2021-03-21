<!DOCTYPE html>
<html lang="es" id="html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link rel="stylesheet" href="estilosnoticia.css">
    <link rel="stylesheet" href="estiloshome.css">
    <link rel="stylesheet" href="animate.css">

    
</head>
<body>
    
 <nav>
        <div>
            <ul>
                <li><a href="index.php"><b>Pong Cultural</b></a></li>
                <li class="secciones"><a href='noticiaDeSeccion.php?id_seccion=2'>Musica</a></li>
                <li class="secciones"><a href='noticiaDeSeccion.php?id_seccion=1'>Fotografia</a></li>
                <li class="secciones"><?php echo"<a href='ver-noticias.php'>///Panel Autor</a>";?> </li>
                <li class="secciones"><?php echo"<a href='panel-admin.php'>///Panel Admin</a>";?> </li>

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
<?php
    $id_seccion=$_GET['id_seccion'];
            $conexion = mysqli_connect();
    $sql = "select * from seccion where seccion.id=$id_seccion"; 
    
    $respuesta = mysqli_query($conexion, $sql);
    $fila = mysqli_fetch_array($respuesta);
        $seccion_nombre = $fila["nombre"]; 
    ?>

    <div class='seccion-fecha'>
                <div class='seccion'>
                    <h2><?php echo "SECCION: $seccion_nombre"?></h2>
                </div>
    </div>
    <main class='contenedor-noticia'>
<?php
    $id_seccion=$_GET['id_seccion'];

    $conexion = mysqli_connect("localhost", "id11888568_glaraanabelperez", "30608545", "id11888568_pongcultural");
    $sql = "select noticia.id, noticia.fecha, noticia.titulo, noticia.subtitulo, noticia.contenido, imagen_1, 
    noticia.seccion_id from noticia where activo='1' and seccion_id =$id_seccion
    ORDER BY fecha desc LIMIT 10";    
    $respuesta = mysqli_query($conexion, $sql);

     while($fila = mysqli_fetch_array($respuesta)) {
        $noticia_id = $fila["id"];
        $fecha = $fila["fecha"];
        $titulo = $fila["titulo"];
        $subtitulo = $fila["subtitulo"];
        $contenido = $fila["contenido"];
        $imagen_1 = $fila["imagen_1"];
        $cortado = substr($contenido, 0, 300);
        
//echo "-----------------------------".$mostrarMas;
echo "
        <section class='bloque-superior'>
            <div class='titulo-noticia-individual'>
                <h3>$titulo</h3>
            </div>
            <div class='fecha'>
                    <h2>$fecha</h2>
            </div>

            <div class='img-subtitulo'>
                <div class='subtitulo-noticia-individual'>
                    <p>$subtitulo</p>
                    <div class='boton-conocer'>
                            <button><a href='noticia.php?id_noticia=$noticia_id'>Ver +</a></button>
                            <div class='invisible'></div>
                    </div> 
                </div>

                <div class='img-noticia-individual'>
                    <img class='img-noticia-main' src='$imagen_1' alt='noticia individual'>
                </div>
            </div>
        </section>
       
    <hr>
        ";
     }
?>

</main>
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


    <script src="js/wow.min.js"></script>
    <script>new WOW().init();</script>
    <script src="jshome.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typeit@6.0.3/dist/typeit.min.js"></script>
<script>
    new TypeIt('.subtitulo', {
  strings: "Magia y Surrealismo fotógrafico"
}).go(); 
</script>
<script type="text/javascript">
    function vermas() {
    var eldiv =document.getElementById("vermasdiv");
    eldiv.style.display="block";
}
</script>

</body>
</html>
