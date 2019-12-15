  
<?php
const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PWD = '';
const DB_DB = 'utnwebmaster';
?>  
  <?php
/// solo para hacer peticiones estando en puertos distintos!!!!
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER['REQUEST_METHOD'];


        $conexion = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_DB);
        $sql = "select * from autor";
        $respuesta = mysqli_query($conexion, $sql);
        $vector = mysqli_fetch_all($respuesta, MYSQLI_ASSOC);
        echo json_encode($vector);
    ?>