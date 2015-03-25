<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Datos</title>

		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<h1 class="text-center">Datos</h1>
		<div class="container well">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Domicilio</th>
						<th>Tel&eacute;fono</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?echo $_POST ['nombre']?></td> 
						<td><?echo $_POST ['domicilio']?></td>
						<td><?echo $_POST ['telefono']?></td>
					</tr>
				</tbody>
			</table>

		</div>

		<script src="js/jquery.js"></script>
		
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>