<?
	$nombre='Amayelli';
	$nombre=25;
	settype($nombre,'string');
	echo is_string($nombre);
	//echo is_int($nombre);

	if (isset($_Get['iTarea']))
		echo $_Get['iTarea'];
	else
		echo  " La variable no existe";

	echo (string)($nombre);
	// ACCESSO A TODOAS LAS VARIASBLES QUE LLEGAN A LA PAGINA POR EL METODO GET, ES UN ARRAY DE LLAVE VALOR $_Get 
	// VARIABLES ENVIADAS POR METODO POST $_POST
	// ARRAY DE COOCKIES, LLAVE VALOR $_COOKIE 
	// MANEJAR VARIABLES DE TIPO ARCHIVO $_FILE
	// CONTIENE INFORMACIÓN DE HEADERS, RUTAS DE ARCHIVOS, RUTAS DE SCRIPTS E INFORMACIÓN DEL SERVIDOR, LLAVE VALOR $_SERVER
	// SESIÓN REGISTRADA ACTUALMENTE $_SESSION
	// CONTIENE VARIABLES TIPO GET, POST, SESSION, COOCKIES, ES TODO LO QUE EL SERVIDOR RESPONDE $_REQUEST

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php echo "<h1>Hola".$nombre."</h1>";?>
</body>
</html>




