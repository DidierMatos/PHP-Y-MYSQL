<?php 

function calcular_area_traingulo($base, $altura){
	$resultado = ($base * $altura) / 2;
	return $resultado;
}

$area_triangulo = calcular_area_traingulo(12,12);
echo 'El triangulo tiene un área de: ' . $area_triangulo . ' metros cuadrados';
?>