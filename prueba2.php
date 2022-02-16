<?php
    session_start();
    if(!$_SESSION["usuario"]){
        header("Location:prueba.php");
    }
?>
<html>
    <head>
        <title>Logeado</title>
    </head>
    <body>
        <h5>Hola <b><?php echo $_SESSION["usuario"];?></b>, has ingresado <b><?php echo $_COOKIE[$_SESSION["usuario"]];?></b></h5>
        <a href="prueba.php?logout=true">Cerrar Sesion</a>
    </body>
</html>