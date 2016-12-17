<?php

$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril',
	'Mayo', 'Junio', 'Julio', 'Agosto', 
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'

);

$numeros = array(1, 22, 23, 10, 9, 5, 70, 100, 20);

//codigo para ordenar
#sort($meses);
//codigo para inversa
#rsort($meses);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Meses del año FOREACH</title>
</head>
<body>
	<h1>Meses del año utilizando FOREACH PHP</h1>
	<ul>
			<?php 

			foreach($meses as $mes) {
				echo '<li>' . $mes . '</li>';
			}

			?>
	</ul>
</body>
</html>