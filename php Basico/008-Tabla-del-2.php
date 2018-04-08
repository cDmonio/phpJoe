<html>
<head>
  <title>Tabla de Multiplicar del 2. </title>
</head>
<body>
  <!-- Utilizando el For -->
<?php
  echo "Tabla del 2 con for: ";
  for($i=2; $i <=20;$i=$i+2)
  {
    echo $i;
    echo "-";
  }
  echo "<br>";

  echo "Tabla del 2 con While: ";
  $i=2;
  while($i<=20)
  {
    echo $i;
    echo "-";
      $i=$i+2;
  }
  echo "<br>";
  
  echo "Tabla del con do/while: ";
  $i=2;
  do{
    echo $i;
    echo "-";
      $i=$i+2;
  }while($i<=20);
?>
</body>
</html>
