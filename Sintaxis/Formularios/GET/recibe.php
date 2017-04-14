<?php

# METODO GET

// print_r($_GET); //print_r nos convierte en arreglo y lo imprime en pantalla

if (!$_GET) { //si no hay POST hace lo siguiente
	header('location: http://localhost/php-y-mysql/Sintaxis/Formularios/GET/');

}

$nombre = $_GET['nombre'];
// echo htmlspecialchars($nombre); //evita inyectar codigo y lo convierte a entidades

$sexo = $_GET['sexo'];
$year = $_GET['year'];
$terminos = $_GET['terminos'];

if ($nombre) {
	echo $nombre . '</br>';
}else{
	echo 'El usuario no ingreso su nombre';
}

echo $nombre . '</br>';
echo $sexo . '</br>';
echo $year . '</br>';
echo $terminos . '</br>';



?>