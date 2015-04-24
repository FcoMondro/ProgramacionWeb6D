<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Practica 8</title>

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
		<div class="container well">
		<form action="datos.php" method="POST" role="form">
			<h1>Registro de Usuario</h1>
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" class="form-control" name="iNombre" id="iNombre" placeholder="Nombre completo">
				<label for="">Domicilio</label>
				<input type="text" class="form-control" name="iDomicilio" id="iDomicilio" placeholder="Dommicilio completo">
				<label for="">Télefono</label>
				<input type="text" class="form-control" name="iPhone" id="iPhone" placeholder="(312) 104-8231">
			</div>
			<button type="submit" class="btn btn-primary">Registrar</button>
            <footer class="text-center">Francisco Javier Gutierrez Mondragon</footer>
		</div>
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>