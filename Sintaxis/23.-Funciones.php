<?php

//De esta manera creamos nuestras propias funciones agregandole atributos

function saludo($nombre) {
	echo 'Hola, '. $nombre . '<br/>';
}

saludo('Didier');
saludo('Adriel');
saludo('Keyli');

function sumar($numero1, $numero2){
	$resultado = $numero1 + $numero2;
	echo 'La suma total es: '. $resultado . '<br />';
}

sumar(2, 3);


?>