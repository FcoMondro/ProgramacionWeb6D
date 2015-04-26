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
		<h1 class="text-center">Registro</h1>

		<form name= "login" id = "login" action="users/agregar" method="POST" role="form">
			<legend>Registro</legend>
		
			<div class="form-group">
				<label for="">Nombre Usuario</label>
				<input type="text" class="form-control" id="username" name = "username" placeholder="Input field">
				<label for="">Contraseña</label>
				<input type="text" class="form-control" id="pass" name = "pass" placeholder="Input field">
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Submit</button>

		</form>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>