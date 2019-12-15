<?php
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    if (!empty($_POST)) {

        $nombre = $_POST["nombre"];
        $password = $_POST["password"];
        // Logitud minima en la base 60
        $password_encriptado = password_hash($password, PASSWORD_BCRYPT);

        $conexion = mysqli_connect("localhost", "id11888568_glaraanabelperez", "30608545", "id11888568_pongcultural");
        $sql = "insert into usuario (username, pwd, activo) values ('$nombre', '$password_encriptado', 1)";
        
        $rta = mysqli_query($conexion, $sql);
        if ($rta ==true) {
            echo "<script>alert('usuario Cargado es $nombre')</script>";
            header("Refresh:0.5; URL=admin.php");
            
        } else {
            echo "Error en el registro";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="ver-noticias.css">
    <link rel="stylesheet" href="estiloshome.css">

    <title>Registrarse</title>
</head>
<body>
<nav>
        <div>
            <ul>
                <li><a href="index.php"><b>Pong Cultural</b></a></li>                
            </ul>
        </div>
    </nav>  

<!------------------------------------------------------>

<div class="registro">

        <div class="pong-izquierda">
            <a class="Pong-login" href="index.php">Pong-Cultural</a>
        </div>    
    <div class="contenedor-bis">
        <div class=registrarsephp>
        <h1 class="titulo-admin">Registro</h1>
        <form method="post">
            <input type="text" name="nombre" required><br>
            <input type="password" name="password"required>
            <br>
            <button class="enviar" type="submit">Enviar</button>
        </form>
        </div>
    </div>
</div>

</body>
</html>










 
