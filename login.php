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

        $email = '';
        $errores = [];

        if ($_POST) {
            $email = trim($_POST['email']);

            $errores = validarLogin($_POST);

            if (empty($errores)) {
                $user = existeEmail($email);

                if (isset($_POST['recordarme'])) {
                    setcookie('id', $user['id'], time() + 3600 * 24 * 30 );
                }

                loguear($user);
            }

        }

         ?>
         <br>
         <br>
        <form style="text-align:center;"  method="post" enctype="multipart/form-data">
            <label for="">email</label>
            <input type="text" name="email" value="<?=$email?>">
            <br>
            <br>
            <label for="">pass</label>
            <input type="text" name="pass" value="">
            <br>
            <br>
            <label for="">Recordarme</label>
            <input type="checkbox" name="recordarme">
            <br>
            <br>
            <button type="submit">Loguearse</button>
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

        <p>No tenés usuario ? <a href="registrarse.php">Registrate</a> </p>


    </body>
</html>
