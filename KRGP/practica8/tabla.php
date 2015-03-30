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
			<table class="table table-hover">
				<thead>
					<tr>
						<th>nombre</th>
						<th>direccion</th>
						<th>telefono</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?php echo $_POST['nombre']?></td>
						<td><?php echo $_POST['direccion']?></td>
						<td><?php echo $_POST['telefono']?></td>
					</tr>
				</tbody>
			</table>
		</div>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>