<?php require_once('funciones.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        vamo lo peebeeee

        <pre>
        <?php
        if (!estaLogueado()) {
            header('location:login.php');
        }

        var_dump($_COOKIE);
        var_dump($_SESSION);


        ?>
        </pre>

        <a href="logout.php">Cerrar Sesion</a>
    </body>
</html>
