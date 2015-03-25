<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Registro</title>

		<link href="css/bootstrap.min.css" rel="stylesheet">

	</head>
	<body>
		<h1 class="text-center"></h1>
		<div class="container well">
			<form action="Datos.php" method="POST" role="form">		
				<legend>Registro de Usuario</legend>
			
				<div class="form-group">
					<label for="">Nombre</label>
					<input type="text" class="form-control" id="Nombre" placeholder="Nombre Completo" name="nombre">
					<label for="">Domicilio</label>
					<input type="text" class="form-control" id="Domicilio" placeholder="Domicilio Completo" name="domicilio">
					<label for="">Tel&eacute;fono</label>
					<input type="text" class="form-control" id="Telefono" placeholder="(312-325-71-25)" name="telefono">
					<br>
					<button type="submit" class="btn btn-primary"></button>
				</div>

		</div>
		
		</form>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>