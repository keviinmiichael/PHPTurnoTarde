<?php


$pass = 'hola';
$pass2 = 'hola';


$passhash = password_hash($pass,PASSWORD_DEFAULT);
$passhash2 = password_hash($pass2, PASSWORD_DEFAULT );


echo "$passhash";
echo "<br>";
echo "<br>";
echo "$passhash2";
echo "<br>";
echo "<br>";
echo "<br>";

echo password_verify('iosfjoisfjisoajasi', $passhash);
