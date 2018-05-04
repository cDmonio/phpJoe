<html>
<head>
  <title>Obtengo datos del formulario</title>
</head>

<body>
<?php
if ($_REQUEST['radio1']=="notiene")
{
  echo $_REQUEST['nombre']. ", no tiene estudios.";
}
elseif($_REQUEST['radio1']=="primarios")
{
  echo $_REQUEST['nombre']. ", tiene estudios primarios.";
}
else{
  echo $_REQUEST['nombre']. ", tiene estudios secundarios.";
}
?>
</body>
</html>
