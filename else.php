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
$mes ='Diciembre';
$verdadero = true;

if ($mes == 'Diciembre') {
	echo '<h1> Feliz Navidad </h1>';
}else if ($mes == 'Enero'){
	echo '<h1> Feliz Año Nuevo </h1>';
} else {
	echo "El mes que pusiste no tiene celebracion";
}

if($verdadero){
	echo 'verdadero';
}else {
	echo 'falso';
}

?>