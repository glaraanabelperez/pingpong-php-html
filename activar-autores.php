<?php
session_start();
//$id=$_GET["id_autor"];
$admin = $_SESSION["admin"];

            $id_autor=$_GET["id_autor"];

            $conexion = mysqli_connect();
            $sql = "update autor set activo=1 where autor.id=$id_autor";
                $respuesta1 = mysqli_query($conexion, $sql);
                //echo $sql;

                if ($respuesta1==true) {
            
                echo"<script type='text/javascript'>
                    alert('El autor se ha activado con exito');
                        window.location.href='panel-admin.php';
                    </script>";
                } else {
                echo "No se pudo realizar la consulta";
                }
                
?>


