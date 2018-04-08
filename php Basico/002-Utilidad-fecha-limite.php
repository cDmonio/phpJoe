
<html>
<head></head>
<!--
$dia=date("d");
A las variables en PHP se les antecede el caracter $. Si a la función date le
pasamos el string "d" retornará sólo el día (si queremos la fecha completa: $fecha=date("d/m/Y")
-->
<body>
<?php
  $dia = date("d");
  if ($dia <=10)
  {
    echo "sitio activo";
  }
  else {
    echo "sitio fuera de servicio";
  }

 ?>
</body>
</html>
