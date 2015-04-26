
		<h1 class="text-center"><?echo $titulo?></h1>
		<div class="container well">
			<form action="<?echo $valor?>" method="POST" role="form">
			<div class="form-group">
				<label for="user">Usuario:</label>
				<input type="text" class="form-control" id="user" name="user" placeholder="Nombre de usuario">

				<label for="password">Contraseña:</label>
				<input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
			</div>
			<button type="submit" class="btn btn-primary"><?echo $boton?></button>
		</form>
		</div>
		