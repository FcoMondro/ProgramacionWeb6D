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
		<h1 class="text-center">Datos</h1>
		<div class="container">
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
					<td><?php echo $_POST['nombre'];?></td>
					<td><?php echo $_POST['domicilio'];?></td>
					<td><?php echo $_POST['telefono'];?></td>
				</tr>
			</tbody>
		</table>
		</div>
		

		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="js/bootstrap.min.js"></script>
	</body>
		<div class="container">
		<footer>Keila Abigail Vald&eacute;z P&eacute;rez 6D</footer>
	</div>
</html>