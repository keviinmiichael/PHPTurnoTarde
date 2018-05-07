<?php

$auto = '{"Marca":"Ford","Color":"Verde"}'.PHP_EOL;

file_put_contents('autos.txt', $auto, FILE_APPEND);

?>
