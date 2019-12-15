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

    <title>Ver-noticias</title>
</head>
<body class="body-cargarNoticia">
    <header>

        <h1 class="titulo-admin">EDIcion DE noTICIAS</h1>
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
</header>
<div class="editar-accion">     
    <form class="form" action="editar-accion2.php" method="post" enctype="multipart/form-data">

        <?php
         $id=$_GET['id'];

         $conexion = mysqli_connect("localhost", "id11888568_glaraanabelperez", "30608545", "id11888568_pongcultural");
         $sql = "select noticia.fecha, noticia.id, noticia.titulo, noticia.subtitulo, seccion.nombre seccion, noticia.contenido, seccion_id from noticia
         inner join seccion on seccion_id = seccion.id
         where noticia.id = $id";       
        //echo $sql
        $respuesta = mysqli_query($conexion, $sql);
        $fila=mysqli_fetch_array($respuesta);
        $id=$fila["id"];
        $fecha=$fila["fecha"];
        $titulo = $fila["titulo"];
        $subtitulo = $fila["subtitulo"];
        $seccion = $fila["seccion"];
        $contenido=$fila["contenido"];
        $seccion_principal_id=$fila["seccion_id"];
        ?>
        <input type="hidden" name="id" value=<?php echo $id?>> 
        <b> -->feCHA </b><br>
        <input class="form-input" type="date" id="start" name="fecha" value=<?php echo $fecha?> min="2019-01-01" max="2019-12-31">
        <br><b> -->Seccion </b><br>
        <select class="form-input" name="seccion_id">
        <?php
        $sql="select * from seccion";
        $rta=mysqli_query($conexion, $sql);

        while ($fila=mysqli_fetch_array($rta)){
        $seccion_id=$fila["id"];
        $nombre=$fila["nombre"];
        echo"<option value='$seccion_id'";
        if ($seccion_id==$seccion_principal_id) {
            echo "selected";
        }
            echo ">$nombre</option>";
        }
        ?>
        </select> 
        <br>
        <b> -->tiTUlo </b><br>
        <input class="form-input"type="text" name="titulo" value="<?php echo $titulo ?>">
        <br><b> -->SuB </b><br>
        <input class="form-input" type="text" name="subtitulo" value="<?php echo $subtitulo ?>"> 
        <br>
        <textarea class="form-input" name="contenido"  cols="80" rows="5"> <?php echo $contenido?> </textarea>
        <input class="btn-volver" type="submit" value="Enviar">

    </form>
</div>
<br><br>
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

