  <h2 class="text-center">Datos del proyecto</h2>
	<div class="card col-md-6 card-body shadow p-3 mb-5 bg-white rounded container users form"> 
	    <div class="col-md-12">
			<h3 class="card-title text-muted card-header">Proyecto: <?php echo h($proyect['Proyect']['id']); ?></h3>
			<br>
			<h4 class="card-subtitle"><strong>Titulo:</strong> <?php echo h($proyect['Proyect']['title']); ?></h4>
			<br>
			<h4 class="card-subtitle"><strong>Proyecto:</strong> <?php echo h($proyect['Proyect']['company']); ?></h4> 
			<br>
			<h4 class="card-subtitle"><strong>Persona contacto:</strong> <?php echo h($proyect['Proyect']['contact']); ?></h4>
			<br>
			<h4 class="card-subtitle"><strong>Teléfono fijo:</strong> <?php echo h($proyect['Proyect']['phone']); ?></h4>
			<br>
			<h4 class="card-subtitle"><strong>Móvil:</strong> <?php echo h($proyect['Proyect']['mobile']); ?></h4>
			<br>
			<h4 class="card-subtitle"><strong>Mail:</strong> <?php echo h($proyect['Proyect']['email']); ?></h4>
			<br>
			<h4 class="card-subtitle"><strong>Gerente de producción:</strong> <?php echo h($proyect['Proyect']['manager']); ?></h4>
			<br>
			<h4 class="card-subtitle"><strong>Lider de proyecto:</strong> <?php echo h($proyect['Proyect']['leader']); ?> </h4>
	  		<br>
			<h4 class="card-subtitle"><strong>Diseñador responsable:</strong> <?php echo h($proyect['Proyect']['responsible']);?></h4>
			<br>
			<h4 class="card-subtitle"><strong>HORAS Tentativas:</strong> <?php echo h($proyect['Proyect']['hrs_attempt']); ?></h4>
			<br>
			<h4 class="card-subtitle"><strong>Fecha de entrega:</strong> <?php echo h($proyect['Proyect']['date_delivery']); ?></h4>
			<br>
		</div>
	</div>
<br>
<br>