<?php
session_start();
//$id=$_GET["id_autor"];
if (isset($_SESSION['admin'])) {
    $admin = $_SESSION['admin'];	
}else{
    header('Location: admin.php');
	die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="ver-noticias.css">
    <link rel="stylesheet" href="estilosnoticia.css">
    <link rel="stylesheet" href="estiloshome.css">
    <title>Panel-Admin</title>
</head>
<body class="body-verNoticias">


   <nav>
        <div>
            <ul>
                <li><a href="index.php"><b>Pong Cultural</b></a></li>
            </ul>
        </div>
    </nav>        
    <!------------------------------------------Fin menu Oculto------------->
    <h1 class="titulo-admin">Configuracion</h1>
    <hr>
    
        <?php
            //$id=$_GET["id_autor"];
            $conexion = mysqli_connect();
            $sql = "select * from autor where activo=1";
                $respuesta1 = mysqli_query($conexion, $sql);
                //echo $sql;
               
                $sql2 = "select * from autor where activo=0";
                $respuesta2 = mysqli_query($conexion, $sql2);
                //echo $sql;
                
////////////////////////////////sql noticias///////////////////////////////
                $sql3 = "select * from noticia  where activo=1";
                $respuesta3 = mysqli_query($conexion, $sql3);
                //echo $sql;
               
                $sql4 = "select * from noticia where activo=0";
                $respuesta4 = mysqli_query($conexion, $sql4);
                //echo $sql;
               
        ?>
    <div>
        <ul class="botonera-admin">
            <li class="secciones" onClick="mostrar-select()"><h2>Autores</h2></li>
            <li class="secciones" onClick="mostrar-select()"><h2>Noticias</h2></li>
        </ul>
    </div>
    <div id="contenedor-inactivos" class="">
        <div class="contenedor-admin">
        <h2>Autores Activos</h2>
        <?php
                if(mysqli_num_rows($respuesta1)==0){
                    echo "No hay autores para mostrar";
                }
                while($fila = mysqli_fetch_array($respuesta1)) {
                    $id_autor=$fila["id"];
                    $nombre_autor=$fila["nombre"];
                    $activo=$fila["activo"];
                        
                    echo "  
                            <div class='autores'>
                                <h2>$nombre_autor</h2>
                                <button><a href='inactivar-autores.php?id_autor=$id_autor'>Desactivar</a></button>
                            </div>
                                ";
                }
        ?>
        <div class="desactivados">
        <h2> Autores Inactivos</h2>
        <?php
                if(mysqli_num_rows($respuesta2)==0){
                    echo "No hay autores para mostrar";
                }
                while($fila = mysqli_fetch_array($respuesta2)) {
                    $id_autor=$fila["id"];
                    $nombre_autor=$fila["nombre"];
                        
                    echo "  
                            <div class='autores'>
                                <h2>$nombre_autor</h2>
                                <p>inactivo</p>
                                <button><a href='activar-autores.php?id_autor=$id_autor'>Activar</a></button>
                            </div>
                                ";
                }

            ?>
            </div>
        </div>
    </div>

    <!---------------------------------------LISTA NOTICIAS----------------------->
    <div id="contenedor-inactivos" class="">
        <div class="contenedor-admin">
        <h2>Noticias Activas</h2>
        <?php
                 if(mysqli_num_rows($respuesta3)==0){
                    echo "No hay noticias activas para mostrar";
                }
                while($fila = mysqli_fetch_array($respuesta3)) {
                    $id_noticia=$fila["id"];
                    $titulo=$fila["titulo"];
                    $activo=$fila["activo"];
                        
                    echo "  
                            <div class='autores'>
                                <h2>$titulo</h2>
                                <button><a href='inactivar-noticias.php?id_noticia=$id_noticia'>Desactivar</a></button>
                            </div>
                                ";
                }
        ?>
    
            <div class="desactivados">
                <h2> Noticias Inactivas</h2>
                <?php
                        if(mysqli_num_rows($respuesta4)==0){
                            echo "No hay noticias inactivas para mostrar";
                        }
                        while($fila = mysqli_fetch_array($respuesta4)) {
                            $id_noticia=$fila["id"];
                            $titulo=$fila["titulo"];
                            $activo=$fila["activo"];
                                
                            echo "  
                                    <div class='autores'>
                                        <h2>$titulo</h2>
                                        <button><a href='activar-noticias.php?id_noticia=$id_noticia'>Activar</a></button>
                                    </div>
                                        ";
                        }

                    ?>
            </div>
        </div>
    </div>



    <br><br><br>
    <hr>
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
