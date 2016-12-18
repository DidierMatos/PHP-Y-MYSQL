<?php

$numero = 10;
$numero2 = 5;
$numero3= '10';

echo $numero += 7;


if($numero3 === 10){
	echo ' Es identico ' . '<br/>';
} else {
	echo '<br/>' . ' 10 es diferente por que aunque sea 10 pero esta en comillas simples ' . '<br/>';
}

//Nuevos operadores DE INCREMENTO

$numero4 = 10;

//primero imprime el numero y luego incrementa pero ya no se actualiza
echo $numero4++ . '<br/>';

//primero incrementa y luego imprime
echo ++$numero4 . '<br/>';

//decremento se usa --


#NUEVOS Operadores CADENA
$texto = 'Cadena de texto ';
$texto2 = 'Cadena de texto2' . '<br/>';

echo $texto3 = $texto . $texto2;

$texto3 = 'Cadena de texto ';
$texto3 .= 'Cadena de texto2';

echo $texto3;
?>