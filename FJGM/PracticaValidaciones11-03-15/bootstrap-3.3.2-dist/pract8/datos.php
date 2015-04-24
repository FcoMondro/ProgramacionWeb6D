

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<?php
			$nombre = $_POST['iNombre'];
			$domicilio = $_POST['iDomicilio'];
			$telefono = $_POST['iPhone'];
		?>
		<div class="container">
			<form action="datos.php" method="POST" role="form">
				<h1 class="text-center">Datos</h1>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Domicilio</th>
							<th>Télefono</th>
					</thead>
					<tbody>
						<tr>
							<td><?php echo $nombre ?></td>
							<td><?php echo $domicilio?></td>
							<td><?php echo $telefono?></td>
						</tr>
					</tbody>
				</table>
        		<footer class="text-center">Francisco Javier Gutierrez Mondragon</footer>
    		</form>
		</div>
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>

<!--
<?php
	$nombre = "Francisco";
	echo is_string($nombre);  //Regresara un 1 
	$nombre = 25;			//Cambia el valor y el tipo de la variable
	echo is_string($nombre); //Regresara un 0 por que cambio el tipo de variable de string a in

	if (isset($_GET['tTarea']))
		echo $_GET['tTarea'];
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

-->
