<?php
$id=$_POST["id"];
$fecha=$_POST["fecha"];
$titulo=$_POST["titulo"];
$subtitulo=$_POST["subtitulo"];
$contenido=$_POST["contenido"];
$seccion_id=$_POST["seccion_id"];


//var_dump($_POST);
            $conexion = mysqli_connect();
$sql = "update noticia set fecha='$fecha', titulo='$titulo', subtitulo='$subtitulo', contenido='$contenido', seccion_id='$seccion_id' 
        where noticia.id = $id";
        

$respuesta = mysqli_query($conexion, $sql);
//var_dump($respuesta);

if ($respuesta==true) {
    echo"<script type='text/javascript'>
                    alert('Se ha editado la noticia con exito');
                        window.location.href='ver-noticias.php';
                    </script>";

} else {
    echo"<script type='text/javascript'>
    alert('Se ha podido establecer la consulta');
        window.location.href='ver-noticias.php';
    </script>";}
?>
