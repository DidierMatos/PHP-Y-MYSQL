<?php 

// #PRIMERA FORMA PARA COMPROBAR Y VALIDAR ENVIO DE DATOS PARA UN FORMULARIO EN PANTALLA

// if ($_SERVER['REQUEST_METHOD'] == 'GET') { //Se accede al metodo de envio y comprueba si es igual al metodo elegido en html para comprobar si los datos se han enviado
// 	echo "Se enviaron por GET";
// } else {
// 	echo "Se enviaron por POST";
// }

#SEGUNDA FORMA PARA COMPROBAR Y ENVIAR ENVIO DE DATOS PARA VARIOS FORMULARIOS EN PANTALLA

//para la segunda forma se necesita agregarle un name al boton ENVIAR o SUBMIT y cambiar en el codigo HTML el metodo a POST. Luego aqui abajo se escribe lo siguiente:

if (isset($_POST['submit'])) { //si esta setiada la variable global post entonces significa que ya a sido enviada.

	echo "Se han enviado los datos correctamente";

	print_r($_POST['submit']); // se imprime en forma de arreglo los datos que se enviaron.
}


 ?>