<?php

# METODO POST NOS PERMITE ACCEDER AL ARREGLO QUE JUNTA TODO EL FORMULARIO PARA ENVIAR

// print_r($_POST); //print_r nos convierte en arreglo y lo imprime en pantalla


// if ($_POST) { //si hay POST hace lo siguiente
// $nombre = $_POST['nombre']; // la variable $_POST almacena los datos de nombre unicamente cuando se da clic al boton enviar y por lo tanto no se puede acceder por url
// $sexo = $_POST['sexo'];
// $year = $_POST['year'];
// $terminos = $_POST['terminos'];

// echo 'Hola, ' . $nombre . ' eres ' . $sexo; //una vez almacenados los datos en variables podemos hacer uso de ellos.
// } else {
// 	header('location: http://localhost/PHP-Y-MYSQL/Sintaxis/Formularios/');

// }


#METODO POST(MISMO CODIGO DE ARRIBA SIMPLIFICADO)

if (!$_POST) { //si no hay POST hace lo siguiente
	header('location: http://localhost/php-y-mysql/Sintaxis/Formularios/POST/');

}

$nombre = $_POST['nombre']; // la variable $_POST almacena los datos de nombre unicamente cuando se da clic al boton enviar y por lo tanto no se puede acceder por url
$sexo = $_POST['sexo'];
$year = $_POST['year'];
$terminos = $_POST['terminos'];

echo 'Hola, ' . $nombre . ' eres ' . $sexo; //una vez almacenados los datos en variables podemos hacer uso de ellos.




?>