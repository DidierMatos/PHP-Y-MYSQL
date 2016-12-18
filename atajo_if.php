<?php

//isset identifica si la variable tiene un valor o no (se vera mas a fondo)

$edad=18;

//si la condicion es true imprime el valor si no imprime mensaje
$edad = (isset($edad)) ? $edad : 'El usuario no establecio su edad';
echo 'Edad: ' . $edad;

//echo isset($edad);


if (isset($edad)) {
	echo $edad = $edad;
}else {
	echo $edad = 'El usuario no establecio su edad';
}

?>