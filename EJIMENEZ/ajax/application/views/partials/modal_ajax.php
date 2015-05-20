<div class="modal fade" id="modal-id">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Selects Ajax</h4>
			</div>
			<div class="modal-body">
				<form action="" method="POST" role="form">
					<div class="form-group">
						<label for="">Estados</label>
						<select name="sEstado" id="sEstado" class="form-control" required="required" onchange="getCiudades()">
							<option value="0">Seleccione uno</option>
							<?php foreach ($estados as $estado):?>
								<option value="<?php echo $estado->idEstado?>"><?php echo $estado->Estado?></option>
							<?php endforeach;?>
						</select>
					</div>
					<div class="form-group">
						<label for="">Ciudad</label>
						<select name="sCiudad" id="sCiudad" class="form-control" required="required" onchange="getCodigos()">
							<option value="0">Seleccione uno</option>
						</select>
					</div>
					<div class="form-group">
						<label for="">Codigo postal</label>
						<select name="sCodigo" id="sCodigo" class="form-control" required="required" onchange="getColonias()">
							<option value="0">Seleccione uno</option>
						</select>
					</div>
					<div class="form-group">
						<label for="">Colonia</label>
						<select name="sColonia" id="sColonia" class="form-control" required="required">
							<option value="0">Seleccione uno</option>
						</select>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->