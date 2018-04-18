<?php
    $title = 'titulo de mi web';
    $saludo = false;
   ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
    </head>
    <body>

        <?php

        var_dump($saludo);

        $saludo = 'chau, hasta luego';
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo "$saludo";

        ?>


        <hr>


        <h2>Parte 2</h2>

        <?php
        $prueba = [];
        $prueba[] = [];
        $prueba[] = "chau";
        $prueba[] = 1231232;

        var_dump($prueba[0]);
        ?>
        
          <hr>
          <h1>array asociativo</h1>

        <?php
        $usuario = [
            'nombre' => 'Kevin',
            'apellido' => 'Ghio',
            'telefono' => ['celular', 'fijo']
        ];
        $usuario['email'] = 'kevin@dh.com';
        var_dump($usuario);
        ?>
        <hr>
        <?php echo "Impresion entre \"comillas\"" ?>
    </body>
</html>
