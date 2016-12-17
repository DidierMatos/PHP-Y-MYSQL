<?php

$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril',
	'Mayo', 'Junio', 'Julio', 'Agosto', 
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'

);

#echo count($meses);

//aqui imprime el ultimo mes dela arreglo
$ultimo_mes = count($meses) - 1;
echo $meses[$ultimo_mes];

?>