<?php
//Este es un arreglo unidimensional
$semana = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');
echo $semana [1] . '<br/>';//Aquí se imprime la posicion [1] del arreglo $semana

//
$semana2 = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');
echo $semana2[6]=' DidMat' . '<br/>';//se puede cambiar el valor de la posicion por uno nuevo


$semana3 = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');
$semana3[10]='me pase'; // recordar que en la programacion se empieza a contar de 0

echo $semana3[10] . '<br/>';

//NUEVA FORMA DE IMPRIMIR ARREGLO METIENDO TIPO CADENA, NUMEROS, Y VARIABLE BOOLEANA
$arreglo = ['Cadenas de texto',1,array('Miercoles',123),true];




?>
