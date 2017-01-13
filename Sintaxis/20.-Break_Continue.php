
<?php
// Con break se puede hacer que en un arreglo imprima datos dentro de un ciclo foreach y parar esa impresión de datos hasta donde tu quieras.

$paises = array(
'Mexico', 'España','Colombia', 'Peru',
'Argentina', 'Venezuela', 'Guatemala'
);

/*foreach($paises as $pais){
	echo $pais . '<br/>';

	if ($pais == 'España') { //esta condicíón dice que pare la impresión de información hasta que encuentre un país que sea igual a España.
		break; // solamente se puede poner este código sin la condición para que ejecute la primera impresión nadamas
	}
}

// con break continue 
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Países del Mundo</h1>
	<?php

// Break continue salta la condición que se le de
#A diferencia del break que corta la ejecucion de la condicion

	foreach ($paises as $pais) {
		if ($pais == 'España') {
			continue;
		}

		echo $pais . '<br />';
	}

		?>
</body>
</html>