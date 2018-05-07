<?php
$marca=$color=''; $errores=[];
  if($_POST){
    $marca = trim($_POST['marca']);
    $color = trim($_POST['color']);

    if($marca===''){
      $errores['marca']='Ingrese la marca';
    }
    if($color===''){
      $errores['color']='Ingrese el color';
    }

    if(!$errores){
      $auto = [
    		"Marca" => $marca,
    		"Color" => $color
    	];

    	$autoCodificado = json_encode($auto).PHP_EOL;

      file_put_contents('autos.txt', $autoCodificado, FILE_APPEND);
      $marca=''; $color='';
      $mensajeExitoso = 'Guardado Exitosamente';
    }

  }

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Registro de Auto</h1>

    <?php
    if($errores){
      echo '<ul>';
      foreach ($errores as $error) {
        echo "<li>$error</li>";
      }
      echo '</ul>';
    }

    if(isset($mensajeExitoso)){
      echo $mensajeExitoso;
    }
     ?>

    <form class="" action="" method="post">
      <label for="">
        Marca:
        <input type="text" name="marca" value="<?= $marca ?>">
      </label>

      <label for="">
        Color:
        <input type="text" name="color" value="<?= $color ?>">
      </label>

      <button type="submit" >Guardar</button>
    </form>

  </body>
</html>
