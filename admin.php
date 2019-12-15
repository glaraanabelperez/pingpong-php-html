<?php

if (!empty($_POST)) {

	$nombre = $_POST["nombre"];
	$password = $_POST["password"];
	// Logitud minima en la base 60
    $password_encriptado = password_hash($password, PASSWORD_BCRYPT);
    
    $conexion = mysqli_connect("localhost", "id11888568_glaraanabelperez", "30608545", "id11888568_pongcultural");
    $sql = "select * from usuario where usuario.username='$nombre' and activo=1";
    // si hay dos nombres igual es que pasa____????-------------------------------------------------------ACA
    $rta = mysqli_query($conexion, $sql);

    if ($rta == false) {
        echo"<script type='text/javascript'>
        alert('Usuario o password Incorrectos');
        window.location.href='admin.php';
        </script>";
    }

    $fila=mysqli_fetch_array($rta);
    $admin_id=$fila["id"];

    //var_dump($fila);

    if ($fila == false) {
        echo"<script type='text/javascript'>
        alert('Usuario o password Incorrectos');
        window.location.href='admin.php';
        </script>";
        
    }

    //$id=$fila["id"];

    if(password_verify ($password, $fila["pwd"])){
        session_start();
        $_SESSION["login_ok"]=true;
        $_SESSION["admin"]=$fila["id"];
        //NO ME FUNCIONA EL SESSIONNNNN-------------------------------------------------------------lo manda pero no se como relacionarlo con la consulta-ACA
       
        header("Location: panel-admin.php");
    }

    else{
        echo"<script type='text/javascript'>
        alert('Usuario o password Incorrectos');
        window.location.href='admin.php';
        </script>";
    }
    
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="ver-noticias.css">
    <link rel="stylesheet" href="estiloshome.css">

    <title>Admin</title>
</head>
<body>
  
<!-- NAV OCULTO -->


<br><br><br>
<nav>
        <div>
            <ul>
                <li><a href="index.php"><b>Pong Cultural</b></a></li>
               
            </ul>
        </div>
    </nav> 
<div class="registro">

        <div class="pong-izquierda">
            <a class="Pong-login" href="index.php">Pong Cultural</a>
        </div>
<!------------------------------------------Fin menu Oculto------------->
    
    <div class="contenedor-bis">

                <!--REGISTRARSE LARA OCULTO-------------------------------------------->
                
                <div class=registrarsephp>
                <h1 class="titulo-admin">Admin</h1>

                    <form method="post">
                            <input type="text" name="nombre" required><br>
                            <input type="password" name="password" required>
                            <br>
                            <button  class="enviar" type="submit">Enviar</button>
                    </form>
                </div>
            
        </div>

</div>
<!-- FIN FOOTER -->
<br>
<footer></footer>
</body>
</html>









