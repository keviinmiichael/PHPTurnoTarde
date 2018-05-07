<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="avatar" value="">
            <br>
            <button type="submit" name="button">Subir Archivo!</button>
        </form>
    </body>
</html>

<?php

if ($_POST) {
    if ($_FILES['avatar']['error'] === UPLOAD_ERR_OK) {
        $name = $_FILES['avatar']['name'];
        $ext = pathinfo($name, PATHINFO_EXTENSION);
        if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png') {
            $archivoReal = $_FILES['avatar']['tmp_name'];
            $ubicacion = dirname(__FILE__);
            $ubicacion = $ubicacion . '/img/';
            move_uploaded_file($archivoReal, $ubicacion.'foto.'. $ext);
            echo "fotito subida :D ";
        }else {
            echo "extension invalida";
        }
    }else {
     echo "No esras subiendo nada";
    }
}


 ?>
