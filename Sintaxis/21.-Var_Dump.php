<?php
// Var_Dump nos permite conocer el tipo de variable, número de carácteres y el valor de la variable.

$texto = 'Carlos';
$número = 10;
$número2 = '5';
$arreglo = array('Didier', 'Adriel', 'Keyli');
$arreglo_asociativo = array('nombre' => 'Didier', 'edad' => 20);
$boleano = false;

echo '<pre>'; // etiqueta de preformato
var_dump($arreglo_asociativo); // se puede usar con los distintos tipos de variables 
echo '<pre>';

?>