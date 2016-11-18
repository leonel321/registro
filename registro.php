<?php
	require("conexio.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <title>Registro</title>
</head>

<body>
<?php
	if(isset($_POST['Registrarme'])){
		$email=$_POST['email'];
		$ID=$_POST['ID'];
		$pass=$_POST['pass'];
		$genero=$_POST['genero']

		$sql="INSERT INTO usuarios ( email,pass,genero) values('$email','$pass','$genero')";
}
?>
</body>
</html>
