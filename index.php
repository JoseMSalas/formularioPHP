<?php 

if ($_GET) {
	print_r($_GET);
	die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
<p class="formulario">Formulario</p>
	<form action="recibe.php" name="formulario_contacto" method="GET" class="estilo" >
		<input type="text" placeholder="Nombre:" name="nombre" id="nombre">
		<input type="text" placeholder="Apellido:" name="apellido" id="apellido">
		<input type="text" placeholder="Edad:" name="edad" id="edad">
		<br>

<!-- Radio Button -->
	<p class="sexo">Introduce tu Sexo</p>
		<label for="hombre">Hombre</label>
		<input type="radio" name="sexo" id="hombre" value="hombre">
		<br>

		<label for="mujer">Mujer</label>
		<input type="radio" name="sexo" id="mujer" value="mujer">
		<br>

<!-- Combobox -->
	<p class="año">Año de Nacimiento</p>
		<select name="year" id="year">
			<option value="1990">1990</option>
			<option value="1991">1991</option>
			<option value="1992">1992</option>
			<option value="1993">1993</option>
			<option value="1994">1994</option>
			<option value="1995">1995</option>
			<option value="1996">1996</option>
			<option value="1997">1997</option>
			<option value="1998">1998</option>
			<option value="1999">1999</option>
			<option value="2000">2000</option>
			<option value="2001">2001</option>
			<option value="2002">2002</option>
			<option value="2003">2003</option>
			<option value="2004">2004</option>
			<option value="2005">2005</option>
			<option value="2010">2010</option>
			<option value="2011">2011</option>
			<option value="1990">1990</option>
			<option value="1991">1991</option>
			<option value="1992">1992</option>
			<option value="1993">1993</option>
			<option value="1994">1994</option>
			<option value="1995">1995</option>
			<option value="1996">1996</option>
			<option value="1997">1997</option>
			<option value="1998">1998</option>
			<option value="1999">1999</option>
			<option value="2000">2000</option>
			<option value="2001">2001</option>
			<option value="2002">2002</option>
			<option value="2003">2003</option>
			<option value="2004">2004</option>
			<option value="2005">2005</option>
			<option value="2010">2010</option>
			<option value="2011">2011</option>
		</select>
		<br>

<!-- Checkbox -->
		<label for="terminos" class="terminos">Terminos y Condiciones</label>
		<input type="checkbox" name="terminos" value="Aceptaste Los Terminos y Condiciones" id="terminos">
		<br>

		<input type="submit" name="btn-enviar" vale="Enviar">
	</form>
</body>
</html>