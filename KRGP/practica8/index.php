<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<h1 class="text-center">Hello World</h1>
		<div class="container">
		<form action="tabla.php" method="POST" role="form">
						<legend>Form title</legend>
						<div class="form-group">
							<label for="">Nombre</label>
							<input type="text" class="form-control" name="nombre" placeholder="Nomre completo">
							<label for="">Direccion</label>
							<input type="text" class="form-control" name="direccion" placeholder="Direccion">
							<label for="">Telefono</label>
							<input type="text" class="form-control" name="telefono" placeholder="Telefono">
						</div>
						<button type="submit" class="btn btn-primary">Aceptar</button>
					</form>			
		</div>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>