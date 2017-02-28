<?php
#Modo Connection pero es antiguo ya no se recomienda por que se le puede inyectar codigo y alterar los datos

$conexion = mysql_connect('localhost', 'root', '') or die ('No se pudo conectar a la bd'); //guarda la conexion con la direccion de host usuario y contraseña en una variable. En caso de fallar no permite accesar.

mysql_select_db('prueba_datos', $conexion); //agrega el nombre de la base de datos junto a la variable de conexion

$resultados = mysql_query('select * from usuarios'); //permite hacer consultas y tambien insertar datos a la base de datos

//---------------------------------------------------------------------

$fila = mysql_fetch_object($resultados); //traduce los resultados en un objeto y lo guarda en una variable

echo $fila->nombre; // imprime el objeto recuperando una fila de resultados y este objeto incluye propiedades de la fila

#Si se repiten estas 2 ultimas lineas de comandos imprimira las propiedades de las filas siguientes


//---------------------------------------------------------------------
echo '<br/>'.'<b>'.'Se puede hacer en un Ciclo While'.'<br/>'.'</b>';
#Para ahorrar codigo y evitar que imprima false cuando no hayan valores se realizara con un ciclo WHILE

#Mediante OBJETOS
echo '<br/>'.'<b>'.'Mediante Objetos'.'<br/>'.'</b>';
while($fila = mysql_fetch_object($resultados)) { 
	echo $fila->nombre;
	echo '<br/>';

}
/*
#Mediante ARREGLOS
echo '<br/>'.'<b>'.'Mediante Arreglos'.'<br/>'.'</b>';

while($fila = mysql_fetch_array($resultados)) { 
	echo $fila['nombre'];
	echo '<br/>';

}
*/


?>





