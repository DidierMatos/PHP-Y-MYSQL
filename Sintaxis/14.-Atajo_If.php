<?php

//isset identifica si la variable tiene un valor o no (se vera mas a fondo)

$edad=18;

//Si la condicion es true imprime el valor ($edad) si no, imprime el mensaje
$edad = (isset($edad)) ? $edad : 'El usuario no establecio su edad';
echo 'Edad: ' . $edad;

//echo isset($edad);

// Esta es la comparación con condciones
if (isset($edad)) {
	echo $edad = $edad;
}else {
	echo $edad = 'El usuario no establecio su edad';
}

?>
