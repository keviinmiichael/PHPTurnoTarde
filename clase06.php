
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php

        $paises = ['Argentina', 'Colombia', 'Sin mundial'];

        $nombre = '';
        $email = '';
        $pais = '';
        $errores = [];

        if ($_POST) {
            $nombre = trim($_POST['nombre']);
            $email = trim($_POST['email']);
            $pais = $_POST['pais'];

            if ($nombre == '') {
                $errores['nombre'] = 'Por favor completa tu nombre';
            }
            if ($email == '') {
                $errores['email'] = 'Por favor completa tu email';
            }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errores['email'] = 'Por favor completa tu email, con un formato valido';
            }
            if ($pais == '') {
                $errores['pais'] = 'Por favor completa de que país sos';
            }



        }

         ?>
         <br>
         <br>
        <form style="text-align:center;"  method="post" action="">
            <label for="">nombre</label>
            <input type="text" name="nombre" value="<?=$nombre?>">
            <br>
            <br>
            <label for="">email</label>
            <input type="text" name="email" value="<?=$email?>">
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
            <button type="submit">Registrarse</button>
        </form>

        <?php if (!empty($errores)): ?>
            <?php foreach ($errores as $key => $error): ?>
                 <?=$error?>
                 <br>
            <?php endforeach; ?>
        <?php endif; ?>


    </body>
</html>
