<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Blog</title>
		<link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
	    <link href="<?php echo base_url(); ?>css/bootstrap-theme.min.css" rel="stylesheet">
    	<link href="<?php echo base_url(); ?>css/bootstrap-tokenfield.min.css" rel="stylesheet">
    	<link href="<?php echo base_url(); ?>css/tokenfield-typeahead.min.css" rel="stylesheet">
    	<link href="<?php echo base_url(); ?>css/jquery-ui.css" rel="stylesheet">
	</head>
	<body>
		<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo base_url(); ?>Inicio">Ver Blog</a>
			</div>
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					
					<? if (isset($autor)){ ?>
						<li>
							<a href="<?php echo base_url(); ?>Post">Crear Nuevo Post</a>
						</li>
					<? }?>
					
				</ul>
				<ul class="nav navbar-nav navbar-right">
					
						<?if (!isset($autor))
						{?>
						<li>
							<a href="<?php echo base_url(); ?>Users/login">Ingresar</a>
						</li><?}
						else{?>
							<li>
								<a href="<?php echo base_url(); ?>Users/cerrar">Salir</a>
							</li>
					    <?}?>
					</li>
					<li>
						<? if (isset($autor)){ ?>
							<a>Autenticado como <? echo $autor; ?></a>
						<? }	
						else 
						{?>
							<a href="<?php echo base_url(); ?>Users">Registrar</a>
						<?}?>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>