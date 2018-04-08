<!--
En PHP no es necesario definir el tipo de dato que almacena antes de utilizarla,
las mismas se crean en el momento de emplearlas. Las variables se declaran cuando
se le asigna un valor, por ejemplo:
$dia = 24;  //Se declara una variable de tipo integer.
$sueldo = 758.43; //Se declara una variable de tipo double.
$nombre = "juan"; //Se declara una variable de tipo string.
$exite = true; //Se declara una variable boolean.
-->
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
  $dia = 24;  //Se declara una variable de tipo integer.
  $sueldo = 758.43; //Se declara una variable de tipo double.
  $nombre = "juan"; //Se declara una variable de tipo string.
  $exite = true; //Se declara una variable boolean.

  echo "Variable entera:";
  echo $dia;
  echo "<br>";
  echo "Variable double:";
  echo $sueldo;
  echo "<br>";
  echo "Variable string:";
  echo $nombre;
  echo "<br>";
  echo "Variable boolean:";
  echo $exite;
?>
</body>
</html>
