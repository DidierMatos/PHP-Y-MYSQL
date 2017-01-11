<?php 

//Variables Tipo String
$nombre = 'Didier';
//Variables Tipo Integer
$numero = 7;
//Variables Tipo Double
$numero_decimal = 7.7;
//Variables Tipo Booleano
$verdadero = true;

echo $nombre;
echo $numero;

//concatenación de impresión de texto
echo "Hola $nombre";
echo 'Hola, ' . $nombre;

//conocer el tipo de una variable
echo gettype($nombre);

?>
