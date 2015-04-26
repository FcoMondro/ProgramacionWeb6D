
		<h1 class="text-center">Crear nuevo Post</h1>
		<div class="container well">
			<form action="Post/agregar" method="POST" role="form">
				<div class="form-group">
					<label for="titulo">Titulo del Post</label>
					<input type="text" class="form-control" id="titulo" name="titulo" placeholder="">
					<label for="contenido">Contenido</label>
					<textarea type="textarea" class="form-control" id="contenido" name="contenido" requiered rows ="10"></textarea>
					<label for="tags">Tags/Etiquetas</label>
					<input type="text" name="tags" class="form-control" id="tokenfield-typeahead" value="">
				</div>
				<button type="submit" class="btn btn-primary">Crear Post</button>
			</form>
		</div>
		