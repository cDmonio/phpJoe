<html>
	<head>
		<title>Mostrando Datos</title>
	</head>
	<body>
		<?php
			$nom=$_REQUEST['nombre'];
			$age=$_REQUEST['edad'];

			if($age>=18)
			{
				echo "El nombre ingresado es: ".$nom;
				echo "<br>";
				echo "Es <b>mayor</b> de edad y tiene: ".$age;
			}
			else{
				echo "El nombre ingresado es: ".$nom;
				echo "<br>";
				echo "Es <b>menor</b> de edad y tiene: ".$age;
			}
		?>
	</body>
</html>