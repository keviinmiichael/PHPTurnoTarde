<?php

require_once('funciones.php');

$ejemplo = 'ejemplo de afuera';


function saludar(){
$ejemplo = 'ejemplo de adentro';
echo $ejemplo;
}

function saludarAfuera(){
global $ejemplo;
echo $ejemplo;
}

saludar();
echo "<br>";
saludarAfuera();






echo suma(4,5);






















 ?>
