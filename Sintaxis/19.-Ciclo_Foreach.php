<?php

$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril',
	'Mayo', 'Junio', 'Julio', 'Agosto', 
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'

);

$Didier = array('telefono' => 253453, 'edad' => 20, 'pais' => 'mexico');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Meses</h1>
	<ul>
		<?php
			/*foreach ($meses as $mes => $) {
				echo '<li>' . $mes . '</li>';
			}*/

			foreach($Didier as $dato => $valor){
				echo '<li>' . $dato . ' : ' . $valor . '</li>';
			}
		?>

	</ul>
</body>
</html>