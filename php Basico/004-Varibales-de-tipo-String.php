<!--
Una variable de este tipo puede almacenar una serie de caracteres.
  $cadena1="Hola";
  $cadena2="Mundo";
  echo $cadena1." ".$cadena2;
Para concatenar string empleamos el operador . (punto)

Otro ejemplo de una variable dentro de otra.
  $dia=10;
  $fecha="Hoy es $dia";
  echo $fecha;
  En pantalla se muestra: Hoy es 10
-->
<html>
<head>
  <title>3 Variables Enteras.</title>
</head>
<body>
  
<?php
  $soyUno=10;
  $soyDos=20;
  $soyTres=30;
  $prueba=$soyUno.$soyDos.$soyTres;

  echo "La variable 1 es :$soyUno, la variable 2 es: $soyDos, la variable 3 es: $soyTres";
  echo "<br>";
  echo "Todas las variables en una sola es: $prueba";
 ?>

</body>
</html>
