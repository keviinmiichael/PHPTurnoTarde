<?php require_once('funciones.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php

        if (estaLogueado()) {
            header('location:felicidades.php');
        }

        $paises = ['Argentina', 'Colombia', 'Sin mundial'];

        $nombre = '';
        $email = '';
        $pais = '';
        $errores = [];

        if ($_POST) {
            $nombre = trim($_POST['nombre']);
            $email = trim($_POST['email']);
            $pais = $_POST['pais'];

            $errores = validar($_POST,'avatar');

            if (empty($errores)) {
                $usuario = crearUsuario($_POST);

                $errores = guardarFoto('avatar',$usuario['email'] );

                if (count($errores) == 0) {
                    guardarUsuario($usuario);
                    header('location:felicidades.php');
                    exit;
                }


            }

        }

         ?>
         <br>
         <br>
        <form style="text-align:center;"  method="post" enctype="multipart/form-data">
            <label for="">nombre</label>
            <input type="text" name="nombre" value="<?=$nombre?>">
            <br>
            <br>
            <label for="">email</label>
            <input type="text" name="email" value="<?=$email?>">
            <br>
            <br>
            <label for="">contraseña</label>
            <input type="text" name="pass" value="">
            <br>
            <br>
            <label for="">repetir contraseña</label>
            <input type="text" name="pass2" value="">
            <br>
            <br>
            <label for="">pais</label>
            <select class="" name="pais">
            <option value="">Elegi tu país</option>
        <?php foreach ($paises as $value): ?>
            <?php if ($pais == $value): ?>
                <option selected value="<?=$value?>"><?=$value?></option>
            <?php continue;
                    endif; ?>
            <option value="<?=$value?>"><?=$value?></option>
        <?php endforeach; ?>
            </select>
            <br>
            <br>
            <input type="file" name="avatar" value="">
            <br>
            <br>
            <button type="submit">Registrarse</button>
        </form>

        <?php if (!empty($errores)): ?>
            <ul style="color:red;">
                <?php foreach ($errores as $key => $error): ?>
                     <li><?=$error?></li>
                     <br>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>


        <hr>

        <p>Ya tengo usuario <a href="login.php">Login</a> </p>


    </body>
</html>
