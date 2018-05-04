<html>
	<head>	
		<title>Probando arrays (Arreglos)</title>
	</head>
	<body>
		<?php

			$nombres[]="juan"; 
			$nombres[]="pedro"; 
			$nombres[]="ana"; 

			for($f=0;$f<count($nombres);$f++) 
			{ 
			  echo $nombres[$f]; 
			  echo "<br>"; 
			} 

			//Otra forma de inicializar una array es; y se cuenta: 0,1,2. entonces son 3 posiciones, en php se cuenta desde 0.
			echo "<br>";
			$edades=array("menores","jovenes","adultos");

			for($f=0;$f<count($edades);$f++) 
			{ 
			  echo $edades[$f]; 
			  echo "<br>"; 
			} 
		?>
	</body>
</html>
