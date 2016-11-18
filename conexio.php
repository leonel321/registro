<?php
	$BBDD_host = "localhost:81";
	$BBDD_user = "root";
	$BBDD_pass = "";
	$BBDD_BBDD = "usuarios";

	$con = mysqli_connect($BBDD_host,$BBDD_user,$BBDD_pass);

	if (mysqli_connect_errno()){
		echo ("Hola");
	}

	mysqli_set_charset($con,"UTF8");

	mysqli_select_db($con,$BBDD_BBDD) or die ("Error al conectar con la base de datos");
?>
