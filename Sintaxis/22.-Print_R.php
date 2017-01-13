<?php

//similar a var_dump pero a diferencia nos muestra información legible (solamente el valor)
#Hay una desventaja en print_r el valor booleano muestra en pantalla 1 o nada.

$texto = 'Didier';
$numero = 10;
$numero2 = '5';
$arreglo = array('Didier', 'Adriel', 'Keyli');
$arreglo_asociativo = array('nombre' => 'Didier', 'edad' => 20);
$boleano = false;

print_r($numero);


?>