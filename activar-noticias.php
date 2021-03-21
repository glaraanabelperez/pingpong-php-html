<?php
session_start();
//$id=$_GET["id_autor"];
$admin = $_SESSION["admin"];

            $id_noticia=$_GET["id_noticia"];

    $conexion = mysqli_connect();
                $sql = "update noticia set activo=1 where noticia.id=$id_noticia";
                $respuesta1 = mysqli_query($conexion, $sql);
                //echo $sql;

                if ($respuesta1==true) {
            
                echo"<script type='text/javascript'>
                    alert('La noticia se ha activado con exito');
                        window.location.href='panel-admin.php';
                    </script>";
                } else {
                echo "No se pudo realizar la consulta";
                }
                
?>


