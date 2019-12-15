<?php
session_start();
//$id=$_GET["id_autor"];
$admin = $_SESSION["admin"];

            $id_autor=$_GET["id_autor"];

            $conexion = mysqli_connect("localhost", "id11888568_glaraanabelperez", "30608545", "id11888568_pongcultural");
            $sql = "update autor set activo=0 where autor.id=$id_autor";
                $respuesta1 = mysqli_query($conexion, $sql);
                //echo $sql;

                if ($respuesta1==true) {
            
                echo"<script type='text/javascript'>
                    alert('El autor se ha desactivado con exito');
                        window.location.href='panel-admin.php';
                    </script>";
                } else {
                echo "No se pudo realizar la consulta";
                }
                
?>


