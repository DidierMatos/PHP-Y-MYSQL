<?php
// Se utiliza la estructura Switch y se compara el mismo procedimiento con condicionales.
$mes= 'Diciembre';

switch($mes){
	case 'Diciembre':
		echo 'Feliz Navidad';
	break;

	case 'Enero':
		echo 'Feliz Año Nuevo';
	break;	

	default:
		echo 'En este mes no se celebra nada';
	break;
}

if ($mes == 'Diciembre') {
	echo 'Feliz Navidad';
}else if ($mes == 'Enero') {
	echo 'Feliz Año Nuevo';
}else {
	echo 'En este mes no se celebra nada';

}

?>
