<?php
// Aquí se ejemplifica lo mas básico de la condición if 

/*
if(condición){
	//
}
*/
/* Operadores de comparación
== Igualdad
< Menor que
> Mayor que
<= Menor o Igual que
>= Mayor o igual que
!= Diferente
! Negación
*/
/*Operadores lógicos

&&-Evalúa que se cumpla una de las dos condiciones
||, OR - Evalúa que se cumpla al menos una condición
xor - Evalúa que se cumpla una y solo una condición

*/
$edad =18;
$nombre='Didier';

if ($edad > 17 && $nombre == 'Didier') {
	echo '<h1> Bienvenido </h1>';
}

if ($edad < 18 or $nombre != 'Didier') {
	echo '<h1> Eres menor de edad </h1>';
}

?>
