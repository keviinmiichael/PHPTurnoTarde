<?php
$nombreArchivo="autos.txt";

if(!file_exists($nombreArchivo)){
  file_put_contents($nombreArchivo, '');
}
$gestor = fopen($nombreArchivo, "r");
//var_dump($gestor); die;
if ($gestor) {
  while ($linea = fgets($gestor)) {
    $auto = json_decode($linea, true);
    echo "El auto {$auto['Marca']} es de color: {$auto['Color']}<br>";
  }
}

  fclose($gestor);



 ?>
