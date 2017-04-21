<?php 

if($_POST){
	echo $_POST['nombre'];
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post"> <!-- ACTION permite mandar esa info a dicho archivo, METHOD permite elegir si ver o no ver la url en el navegador de la info que se esta enviando EN ESTE CASO SE LE AGREGA UNA FUNCION QUE HACE QUE SE RECARGUE Y VALIDE LOS DATOS DESDE LA MISMA PAGINA DE MANERA SEGURA.-->

		<input type="text" placeholder="Nombre: " name="nombre"> <!--A este input no se le agrega value(valor) ya que el campo es dinamico es decir el usuario puede escribir cualquier cosa-->
		<br>
		
		<label for="hombre">Hombre</label>  <!--Relaciona ambos label para que sea uno mismo con el id y for y pueda marcar solo uno-->
		<input type="radio" name="sexo" value="hombre" id="hombre">

		<label for="hombre">Mujer</label>  <!--Importante mantener el mismo nombre del name si se necesita poner 2 label e input relacionados y que el usuario solo pueda escoger uno-->
		<input type="radio" name="sexo" value="mujer" id="mujer">
		<br>

		<select name="year" id="year"> <!--Permite al usuario elegir mas de una opcion de una lista-->
			<option value="2000">2000</option>
			<option value="2001">2001</option>
			<option value="2002">2002</option>
		</select>
		<br>
		
		<label for="terminos">Aceptas los Terminos</label>
		<input type="checkbox" name="terminos" id="terminos"value="ok">
		<br>

		<input type="submit" value="Enviar">

	</form>
	
</body>
</html>