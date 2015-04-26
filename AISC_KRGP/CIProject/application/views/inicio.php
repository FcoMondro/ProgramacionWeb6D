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
					<p><? echo substr($post['content'], 0, 200)?></p>
					<p><a class="btn btn-default btn-sm" href="Inicio/mostrar/<? echo $post['post_id']?>">Ver completo</a></p>
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
</div>
