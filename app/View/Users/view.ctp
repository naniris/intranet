	
<h1 class="text-center">Datos del Usuario</h1>	  
<div class="card col-md-6 card-body shadow p-3 mb-5 bg-white rounded container users form"> 
	<div class="col-md-12">
		<h4 class="card-subtitle">Nombre: <label class="text-muted"><?php echo h($user['User']['name']); ?></label></h4>
		<br>
		<h4 class="card-subtitle">Ocupación: <label class="text-muted"><?php echo h($user['User']['ocupation']); ?></label></h4> 
		<br>
		<h4 class="card-subtitle">Tipo: <label class="text-muted"><?php echo h($user['User']['type']); ?></label> </h4>
	</div>
</div>
<br>