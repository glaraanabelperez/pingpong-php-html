<?php
session_start();
session_destroy();
echo"<script type='text/javascript'>
                    alert('Sesion terminada');
                        window.location.href='index.php';
                    </script>";

?>