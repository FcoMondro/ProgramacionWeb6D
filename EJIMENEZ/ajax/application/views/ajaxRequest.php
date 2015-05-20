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
		<h1 class="text-center">Hello Ajax</h1>
		<div class="container well">
			<button type="button" class="btn btn-primary" data-toggle="modal" href="#modal-id">Mostrar catalogo</button>
		</div>
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="js/bootstrap.min.js"></script>
		<script>
			function getCiudades()
			{
				var idEstado = $('#sEstado').val();
				$.ajax({
					url: 'api/getCiudades/'+idEstado,
					type: 'GET',
					dataType: 'JSON'
				})
				.done(function(data) {
					console.log(data);
					$('#sCiudad').empty();
					$.each(data, function(index, val) {
						 /* iterate through array or object */
						 $('#sCiudad').append(new Option(val.ciudad, val.idCiudad));
					});
					
				})
				.fail(function(data) {
					console.log("error");
				})
				.always(function(data) {
					console.log("complete");
				});
			}
			function getCodigos()
			{
				var idCiudad = $('#sCiudad').val();
				$.ajax({
					url: 'api/getCodigos/'+idCiudad,
					type: 'GET',
					dataType: 'JSON'
				})
				.done(function(data) {
					console.log(data);
					$('#sCodigo').empty();
					$.each(data, function(index, val) {
						 /* iterate through array or object */
						 $('#sCodigo').append(new Option(val.codigo));
					});
					
				})
				.fail(function(data) {
					console.log("error");
				})
				.always(function(data) {
					console.log("complete");
				});
			}
			function getColonias()
			{
				var codigo = $('#sCodigo').val();
				$.ajax({
					url: 'api/getColonias/'+codigo,
					type: 'GET',
					dataType: 'JSON'
				})
				.done(function(data) {
					console.log(data);
					$('#sColonia').empty();
					$.each(data, function(index, val) {
						 /* iterate through array or object */
						 $('#sColonia').append(new Option(val.colonia, val.idColonia));
					});
					
				})
				.fail(function(data) {
					console.log("error");
				})
				.always(function(data) {
					console.log("complete");
				});
			}
		</script>
	</body>
</html>