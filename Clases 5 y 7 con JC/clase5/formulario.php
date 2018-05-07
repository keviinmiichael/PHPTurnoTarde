<?php
  $hobbies = ['pescar', 'nadar', 'volar'];
 ?>
<!DOCTYPE HTML>
<html>
<body>

<form action="imprimir.php" method="post">
  <div class="">
    <label>Nombre:
      <input type="text" name="nombre">
    </label>
  </div>

  <div class="">
    <label >E-mail:
      <input type="text" name="email">
    </label>
  </div>

  <div class="">
    Mis Hobbies:
    <?php
      foreach ($hobbies as $value) {
        echo '<label>
          <input type="checkbox" name="hobbies[]" value="'.$value.'">
          '.ucwords($value).'
        </label>';
      }
     ?>
  </div>

  <div class="">
    Genero:
    <label>
      <input type="radio" name="genero" value="m">
      Masculino
    </label>
    <label>
      <input type="radio" name="genero" value="f">
      Femenino
    </label>
  </div>

  <div class="">
    <label> Como dormiste esta noche?</label>
    <select class="" name="como_dormiste">
      <?php
        for ($i=1; $i < 11; $i++) {
          //echo "<option value=$i>$i</option>";
          echo '<option value="'.$i.'">'.$i.'</option>';
        }
      ?>
    </select>
  </div>

  <div class="">
    <button type="submit" name="button">Enviar</button>
  </div>

</form>

</body>
</html>
