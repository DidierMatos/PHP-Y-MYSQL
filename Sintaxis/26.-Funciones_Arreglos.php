<?php

#FUNCTION EXTRACT (IMPRIME EL VALOR DE LOS ID COMO VARIABLES)

// $amigo = array('telefono' => 234234, 'edad' => 20, 'pais' => 'mexico');
	

// extract($amigo); #extraer los atributos como variables 

// echo $telefono;


# FUNCION ARRAY POP(PERMITE IMPRIMIR ULTIMO DIA O LLAMARLO)

// $semana = array(
// 	'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');

// $ultimo_dia = array_pop($semana);

// foreach ($semana as $dia) {
// 	echo $dia .'<br/>';
// }

// echo $ultimo_dia; // permite imprimir unicamente el ultimo valor.

#FUNCION JOIN (PERMITE IMPRIMIR UN ESPACIADO O SIMBOLOS ENTRE LAS VARIABLES)

// $semana = array(
// 		'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');


// echo join(' - ', $semana); // aqui imprime un guion con espacios entre las variables de $semana

#FUNCION COUNT (VISTO ANTERIORMENTE, CUENTA LAS VARIABLES DEL ARREGLO)

// $semana = array(
// 		'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');

// echo count($semana) . '<br/>';

// rsort($semana); // imprime ascendente o descendente(sort)

// echo join(', ', $semana); // imprime simbolos entre cada variable del arreglo

#FUNCION ARRAY_REVERSE (SEPARA E INVIERTE EL ORDEN DE LAS VARIABLES DEL ARREGLO)

$semana = array(
		'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');


$semana_reverse = array_reverse($semana);


echo join(', ', $semana_reverse); 

?>