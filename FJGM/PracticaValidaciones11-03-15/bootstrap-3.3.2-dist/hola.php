<?
	$nombre = "Francisco";
	echo is_string($nombre);  //Regresara un 1 
	$nombre = 25;			//Cambia el valor y el tipo de la variable
	echo is_string($nombre); //Regresara un 0 por que cambio el tipo de variable de string a in

	if (isset($_GET['tTarea']))
		echo $_GET['tTarea']);
	else
		echo "la variable no extiste";
	/*
	echo (string)$nombre;
	$_GET -> VARIABLES ENVIADAS POR METODO GET
	$_POST -> VARIABLES ENVIADAS POR METODO POST
	$_COOKIE -> ARRAY DE COOKIE
	$_FILE -> VARIABLES DE TIPO ARCHIVO
	$_SERVER -> HEADERS, RUTAS DE ARCHIVO, RUTAS DE SCRIPT
	$_SESSION -> SESION REGISTRADA ACTUALMENTE
	$_REQUEST -> GET,POST, SESSION, COOKIE
	*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<? echo "<h1> Hola ".$nombre."</h1>"; ?>
</body>
</html>