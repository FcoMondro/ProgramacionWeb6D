<div class="container">
  <div class="blog-header">
    <h1 class="blog-title">Bienvenido al Blog</h1>
  </div>
  <div class="row">

    <div class="col-sm-8 blog-main">
      <div class="blog-post">
    		<?foreach ($posts as $post)
				{?>
  				<h2 class="blog-post-title"><? echo $post['title']?></h2>
					<p class="blog-post-meta"><? echo $post['date']?> creado por <a><? echo $post['username']?></a></p>
					<p><? echo $post['content']?></p>
				<?}?>
      </div>
    </div>
	

    <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
      <div class="sidebar-module well">
        <h4>Tags</h4>
        <ol class="list-unstyled">
  				<?foreach ($tags as $tag)
	   			{?>
		  			<li><a><? echo $tag['tag']?></a></li>
		   	<?}?>
        </ol>
      </div>
    </div>    
  </div>

  <div class="col-sm-8 blog-main container well">
  	<h2>Crear un comentario</h2>
	<form action="../../Post/comentario/<? echo $post['post_id']?>" method="POST" role="form">
		<div class="form-group">
			<label for="">Nombre</label>
			<input type="text" class="form-control" id="" name="nameComment"placeholder="">
			<label for="">Correo</label>
			<input type="text" class="form-control" id="" name="mail"placeholder="">
			<label for="">Comentario</label>
			<textarea type="textarea" class="form-control" id="" name="comments" requiered rows ="10"></textarea>
		</div>	
		<button type="submit" class="btn btn-primary">Agregar Comentario</button>
	</form>
	<p></p>
	<hr>
	<h2>Comentarios</h2>
	<?foreach ($comments as $comment)
	{?>
		<h4>Nombre:</h4>
		<h7><?echo $comment['name']?></h7>
		<h4>Comentario:</h4>
		<h7><? echo $comment['comment']?></h7>
		<br>
		<br>
	<?}?>
  </div>
</div>