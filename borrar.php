<?php
$idborrar=$_GET["id"];

            $conexion = mysqli_connect();

//$idborrar = $_GET["id"];
$sql = "delete from noticia where id=$idborrar";
$rta = mysqli_query($conexion, $sql);
echo"<script type='text/javascript'>
        alert('Noticia eliminada');
        window.location.href='ver-noticias.php';
        </script>";
?>
