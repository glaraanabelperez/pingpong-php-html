<?php

$dir_subida = '/xampp/htdocs/mis_imagenes/';
$destino = $dir_subida . $_FILES['miarchivo']['name'];

$conexion = mysqli_connect("localhost", "id11888568_glaraanabelperez", "30608545", "id11888568_pongcultural");
$sql= "insert into noticia (imagen_1) values ('$destino')";
$rta = mysqli_query($conexion, $sql);

if($rta==true){
    echo "Carga exitosa ";
}
else {
	echo "Error en el registro";
}

//if (move_uploaded_file($_FILES['miarchivo']['tmp_name'], $destino)) {
  //  echo "El fichero es válido y se subió con éxito";
//} else {
  //  echo "No se pudo subir el archivo";
//}


?>