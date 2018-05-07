<pre><?php
/*
$nombre = 'Yuri';
echo 'Hola "'.$nombre.'"'; die;
*/

// var_dump($_POST); die;


foreach ($_POST as $key => $value) {
  if($key==='hobbies'){
    echo 'Los hobbies son: ';
    foreach ($value as $hobby) {
      echo $hobby.'-';
    }
    echo '<br>';
    continue;
  }
  echo "El $key es: $value<br>";
}

 ?>
