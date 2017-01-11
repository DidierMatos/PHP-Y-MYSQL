<?php
//Recorriendo Arreglos con Ciclo For y While
$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril',
	'Mayo', 'Junio', 'Julio', 'Agosto', 
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'

);

//echo count($meses);
//Ciclo For
for ($i = 0; $i < count($meses) ; $i++) { 
	echo $meses[$i] . '<br />';
}
//Ciclo While
$contador = 0;
while ( $contador < count($meses)) {
	echo $meses[$contador]. '<br />';

	$contador++;
}

?>