<?php
	require("conexio.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Formulario</title>
	<link rel="stylesheet" href="css/estilos.css">
</head>

<body>
	<div>
		<header>
			<nav id="menu">
				<ul>
					<li>
						<label for="Contraseña">Contraseña</label><br>
						<input type="password" name"Contraseña"value="">
					</li>
					<li>
						<label for="Usuario">Usuario</label><br>
						<input type="text" name="Usuario" value="">
					</li>
				</ul>
			</nav>
			<hgroup>
				<h1>Registrate</h1>
				<h3>Prueba</h3>
			</hgroup>
		</header>

		<br>

		<form name="registro" action="registro.php" method="post" enctype="application/x-www-form-urlencoded">
			<label for="ID">Nombre de Usuario</label><br>
			<input type="text" name="ID" value="" maxlength="10" maxlength="15">

			<br><br>

			<label for="email">Email</label><br>
			<input type="email" name="email" value="" maxlength="30">

			<br><br>

			<label for="pass">Contraseña</label><br>
			<input type="password" name="contraseña" value="" minlength="8" maxlength="16">

			<br><br>

            <input type="radio" name="genero" value="M">Masculino
            <input type="radio" name="genero" value="F">Femenino

            <br><br>

			<input type="submit" name="Registrarme" value="Registrarme">
			<input type="reset" name="clear" value="resetear">
		</form>
	</div>
</body>
</html>

