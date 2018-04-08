<html>
<head></head>
<body>
  <!--
  $num=rand(1,100);
  En la variable $num se almacena un valor entero que la computadora genera en forma aleatoria entre 1 y 100.
  Hacer un programa que lo muestre por pantalla al valor generado. Mostrar además si es menor o igual a 50 o si es mayor.
  ejemplo para mostrar el valor de una variable en un echo:
    echo $num;
  -->
<?php
  $num = rand (1,100);
  echo "El número aleatorio es: $num";
  echo "<br>";
  if ($num <= 50)
  {
    echo "$num es menor o igual a 50!";
  }else {
    echo "$num es mayor que 50!";
  }
?>
</body>
</html>
