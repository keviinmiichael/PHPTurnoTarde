<?php
$loQueEligioElUsuario = 'juanca';


$nombres = ['pedro', 'juanca', 'Yuri'];
foreach ($nombres as $nombre) {
    if ($nombre == $loQueEligioElUsuario) {
        echo "$nombre selected";
        echo '<br>';
        continue;
    }
    echo $nombre;
    echo '<br>';
}

 ?>
