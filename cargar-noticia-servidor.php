<?php
//ESTO ES SOLO LA NOTICIA!!!!!!!!!!!!!!!!!!!!!

//print_r($_POST);
session_start();


//$id=$_GET["id_autor"];
$id_autor= $_SESSION["id_autor"];

$titulo = $_POST["titulo"];
$subtitulo = $_POST["subtitulo"];
$fecha= $_POST["trip-start"];
$seccion_id = $_POST["seccion_id"];
$contenido= addslashes ($_POST["contenido"]);
$activo=1;

$dir_subida = 'imagenes/';
$img=mime_content_type($_FILES["miarchivo"]["tmp_name"]);
if($img!="image/jpeg" && $img!="image/gif" && $img!="image/png"){
    echo "<button><a href='cargar-noticia-cliente.php?autor_id=$id_autor'>Volver</a></button>";
    die("------>Formato invalido- Solo puede subir archivos JPEG/GIF/png");
}
$destino= $dir_subida . basename ($_FILES['miarchivo']['name']);

if (move_uploaded_file($_FILES['miarchivo']['tmp_name'], $destino)) {
    $imagen_1 = $destino; //TODO: imagen por defecto o algo
}else{
    echo"<script type='text/javascript'>
        alert('Usuario o password Incorrectos');
        window.location.href='ver-noticias.php';
        </script>";
}

            $conexion = mysqli_connect();
$sql= "insert into noticia (autor_id, titulo,subtitulo, fecha, seccion_id, contenido, activo, imagen_1) 
values ($id_autor,'$titulo', '$subtitulo', '$fecha', $seccion_id, '$contenido', $activo, '$imagen_1')";
$rta = mysqli_query($conexion, $sql);
echo "$rta";

if($rta==true){
    echo"<script type='text/javascript'>
        alert('Carga Exitosa');
        window.location.href='cargar-noticia-cliente.php';
        </script>";
}
else {
    echo mysqli_error($conexion);
	echo "Error en el registro";
}

?>
