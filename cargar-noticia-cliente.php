<?php
session_start();
//$id=$_GET["id_autor"];
$id_autor = $_SESSION["id_autor"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="ver-noticias.css">
    <link rel="stylesheet" href="estiloshome.css">
        <title>Cargar-Noticias</title>
</head>
<body class="body-cargarNoticia">
<header>

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
    <h1 class="titulo-admin">CarGar NotIciAs</h1>
</header>
            <section class="contenedor-bis">
                <form class="form" action="cargar-noticia-servidor.php" method="post" enctype="multipart/form-data">
                        <?php
                $conexion = mysqli_connect("localhost", "id11888568_glaraanabelperez", "30608545", "id11888568_pongcultural");
                $sql="select autor.nombre from autor where id=$id_autor";
                        $respuesta= mysqli_query($conexion, $sql);
                        while ($fila=mysqli_fetch_array($respuesta)){
                            $nombre=$fila["nombre"];
                        }
                        ?>
                    <label> <h2>AutOr <?php echo"$nombre"?></h2>
                    </label>
                    <br>
                    <b> -->TituLO NOticia --></b><br>
                    <input class="form-input" type="text" name="titulo" required>
                    <br>
                    <b> -->SubTitulo NOticia --></b><br>
                    <input class="form-input" type="text" name="subtitulo" required>
                    <br>
                    <label>
                        <select class="form-input" name="seccion_id" required>
                            <option value="">Selecciona una seccion</option>
                                <?php
                                $sql="select * from seccion";
                                $respuesta=mysqli_query($conexion,$sql);
                                while ($fila=mysqli_fetch_array($respuesta)){
                                    $id=$fila["id"];
                                    $nombre=$fila["nombre"];
                                    echo"<option value='$id'>$nombre</option>";
                                }
                                ?>
                        </select>
                    </label>
                    <br>
                    <b> -->ConTEniDO </b><br>
                    <textarea class="form-input" name="contenido" id="" cols="30" rows="10" required></textarea>
                    <br>
                    <b> -->FeCHA --> </b><br>
                    <input class="form-input" type="date" id="start" name="trip-start" value="2019-11-07" min="2019-01-01" max="2019-12-31"> 
                    <br>
                    <b> ----->CarGar IMG----------------></b><input type="file" name="miarchivo" required> 
                    <button class="btn-volver"  class ="enviar" type="submit">Subir</button>
                </form>
        </section>
        <br><br>
<hr>
<footer>
        
        <div class="foot-div-1">
          
                <h3>Links Rapidos</h3>
                <ul>
                    <li><a href="registrarse.php">Ragistrate</a></li>
                    <li><a href="panel-admin.php">Admin</a></li>
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
<!--php, el desplegable a mano, traigo ....-->

