<?php
if (!empty($_POST)) {

	$nombre = $_POST["nombre"];
	$password = $_POST["password"];
	// Logitud minima en la base 60
    $password_encriptado = password_hash($password, PASSWORD_BCRYPT);
    
    $conexion = mysqli_connect("localhost", "id11888568_glaraanabelperez", "30608545", "id11888568_pongcultural");
    $sql = "select * from autor where nombre='$nombre' and activo=1";
    // si hay dos nombres igual es que pasa____????-------------------------------------------------------ACA
    $rta = mysqli_query($conexion, $sql);

    if ($rta == false) {
        echo"<script type='text/javascript'>
        alert('Usuario o password Incorrectos');
        window.location.href='login.php';
        </script>";
    }
    //var_dump($rta);

    $fila=mysqli_fetch_array($rta);
    $id_autor=$fila["id"];

    if ($fila == false) {
        echo"<script type='text/javascript'>
        alert('Usuario o password Incorrectos');
        window.location.href='login.php';
        </script>";
    }

    //$id=$fila["id"];

    if(password_verify ($password, $fila["pwd"])){
        session_start();
        $_SESSION["login_okk"]=true;
        $_SESSION["id_autor"]=$fila["id"];
        //NO ME FUNCIONA EL SESSIONNNNN-------------------------------------------------------------lo manda pero no se como relacionarlo con la consulta-ACA
        header("Location: ver-noticias.php?id_autor=$id_autor");
    }
    else{
        echo"<script type='text/javascript'>
        alert('Usuario o password Incorrectos');
        window.location.href='login.php';
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

    <title>Log-In</title>
</head>
<body>

 <nav>
        <div>
            <ul>
                <li><a href="index.php"><b>Pong Cultural</b></a></li>                
            </ul>
        </div>
    </nav>     
<!-- NAV OCULTO -->
<br><br><br>
<div class="registro">

        <div class="pong-izquierda">
            <a class="Pong-login" href="index.php">Pong Cultural</a>
        </div>
<!------------------------------------------Fin menu Oculto------------->
    
    <div class="contenedor-bis">

                <!--REGISTRARSE LARA OCULTO-------------------------------------------->
                
                <div class=registrarsephp>
                <h1 class="titulo-admin">LogIn</h1>

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

<hr>
<br>
<footer></footer>
</body>
</html>









