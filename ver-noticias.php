<?php
session_start();
if (isset($_SESSION['id_autor'])){
    $id_autor = $_SESSION['id_autor'];
}else{
header('location: login.php');
 die() ;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="ver-noticias.css">
    <link rel="stylesheet" href="estiloshome.css">
    <link rel="stylesheet" href="estilosnoticia.css">

    <script>
        function validarBorrar() {
            return confirm("Seguro que deseas borrar...");
        }
    </script>

    <title>Ver-noticias</title>
</head>
<body class="body-verNoticias">

   <nav>
        <div>
            <ul>
                <li><a href="index.php"><b>Pong Cultural</b></a></li>
                <li class="secciones"><a href='noticiaDeSeccion.php?id_seccion=2'>Musica</a></li>
                <li class="secciones"><a href='noticiaDeSeccion.php?id_seccion=1'>Fotografia</a></li>
                <li class="secciones"><?php echo"<a href='ver-noticias.php'>///Panel Autor</a>";?> </li>
                <li class="secciones"><?php echo"<a href='panel-admin.php'>///Panel Admin</a>";?> </li>

                
            </ul>
        </div>
    </nav>        
    <!------------------------------------------Fin menu Oculto------------->
    <h1 class="titulo-admin">EDIcion DE noTICIAS</h1>
    <hr>
    <div class="contenedor-a">
    <?php
                $conexion = mysqli_connect("localhost", "id11888568_glaraanabelperez", "30608545", "id11888568_pongcultural");
                $sql = "select autor.nombre from autor
                        where autor.id=$id_autor and activo=1";
                $respuesta = mysqli_query($conexion, $sql);
                $fila = mysqli_fetch_array($respuesta);
                $nombre_autor=$fila["nombre"];
    ?>
        <div class='autor'><?php echo "$nombre_autor"?>
            <?php echo "<a href='cargar-noticia-cliente.php?id=$id_autor'> 
            <button class='enviar'>CargAR NuEva</button></a>";?> 
        </div>
        <div class="contenedor-bis">
        <?php
            //$id=$_GET["id_autor"];
                $sql = "select noticia.fecha, noticia.id, noticia.titulo, autor.nombre autor, 
                seccion.nombre seccion, noticia.contenido, noticia.imagen_1 from noticia
                        inner join autor on autor_id=autor.id
                        inner join seccion on seccion_id=seccion.id
                        where autor_id=$id_autor";
                $respuesta = mysqli_query($conexion, $sql);
                //echo $sql;
                if(mysqli_num_rows($respuesta)==0){
                    echo "No hay Noticias para mostrar";
                }

                while($fila = mysqli_fetch_array($respuesta)) {
                    $id=$fila["id"];
                    $fecha=$fila["fecha"];
                    $titulo = $fila["titulo"];
                    $autor = $fila["autor"];
                    $seccion = $fila["seccion"];
                    $contenido=$fila["contenido"];
                    $imagen_1=$fila["imagen_1"];
                    $cortado = substr($contenido, 0, 50);

                    echo "  <div class='noticia'>
                            
                                <h2>$titulo /Titulo</h2>
                                <p>$fecha /Fecha</p>
                                <P>$seccion /Genero</P>
                                <p>$cortado /Contenido</p>
                                 <div><img class='img-base' src= '$imagen_1' ></div>
                                 <hr><hr>
                                <a href='editar-noticia2.php?id=$id'><h2>EDITAR ></h2></a>
                                <a href='borrar.php?id=$id'onclick='return validarBorrar()'><h2>BORRAR ></h2></a>
                          
                            </div>
                                ";
                }
            ?>
        </div>
        
    </div>


    <br><br><br>
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


</body>
</html>
