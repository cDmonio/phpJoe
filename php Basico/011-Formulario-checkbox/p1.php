<html>
<head>
  <title>Hola Formulario recibiendo datos</title>
</head>
<?php
  if(isset($_REQUEST['check1']))
  {
    $suma=$_REQUEST['valor1'] + $_REQUEST['valor2'];
    echo "La suma es: " .$suma. "<br>";
  }
  if (isset($_REQUEST['check2']))
  {
    $resta=$_REQUEST['valor1'] - $_REQUEST['valor2'];
    echo "La resta es: ".$resta. "<br>";
  }
?>
</html>
