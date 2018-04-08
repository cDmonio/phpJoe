<!--
if (Condición)
{
  Instrucción a1;
  Instrucción a2;
}
else
{
  Instrucción b1;
  Instrucción b2;
}
-->

<html>
<head>
  <title>Codiciones!!!!!</title>
</head>
<body>
  <?php
  $valor=rand(1,10);
  echo "El valor sorteado es $valor<br>";
  
  if ($valor<=5)
  {
    echo "Es menor o igual a 5";
  }
  else
  {
    echo "Es mayor a 5";
  }
  ?>
</body>
</html>
