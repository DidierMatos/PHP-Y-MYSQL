<?php
//Se usa para contar el número de valores dentro de un arreglo
$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril',
	'Mayo', 'Junio', 'Julio', 'Agosto', 
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'

);

#echo count($meses); //Este código imprime el número de meses 

//Aquí imprime el último mes del arreglo
$ultimo_mes = count($meses) - 1;
echo $meses[$ultimo_mes];

?>
