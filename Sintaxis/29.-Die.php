<?php
#FUNCION DIE PERMITE PARAR LA EJECUCION DE LA PAGINA POR COMPLETO

echo 'Soy un echo';

// var_dump($variable);

die(); // en cuanto se ejecute el resto del codigo ya no se ejecuta por que esta funcion para todo lo que este debajo. Sirve para probar ciertos valores como el var_dump o que si no hace una conexion exitosa a la BD pare la ejecucion.

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Hola Mundo</h1>
	<?php die();//igual aqui se puede poner para no mostrar el codigo html de abajo ?>
</body>
</html>