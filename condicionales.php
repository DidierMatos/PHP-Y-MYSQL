<?php
/*
if(condicion){
	//
}
*/
/* Operadores de comparacion
== Igualdad
< Menor que
> Mayor que
<= Menor o Igual que
>= Mayor o igual que
!= Diferente
! Negacion
*/
/*Operadores logicos

&&-Evalua que se cumpla una de las dos condiciones
||, OR - Evalua que se cumpla al menos una condicion
xor - Evalua que se cumpla una y solo una condicion

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