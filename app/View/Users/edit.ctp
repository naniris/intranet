<div class="card col-md-6 card-body shadow p-3 mb-5 bg-white rounded container users form"> 
	<div class="users form">
		<?php echo $this->Form->create('User', array('class'=>'col-md-12')); ?>
			<div class="form-group">
				<fieldset>
					<h3 class="box-title" style="margin-left:35%">Modificar</h3>
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('name', array('label'=>'Nombre', 'class'=>'form-control'));
				echo $this->Form->input('pass', array('label'=>'Contraseña', 'type'=>'password' , 'class'=>'form-control'));
				echo $this->Form->input('ocupation', array('label'=>'Ocupación', 'class'=>'form-control'));
				echo $this->Form->input('type', array('label'=>'Tipo', 'class'=>'form-control', 'options' => array('Administrador'=>'Administrador', 'Usuario'=>'Usuario')));	
				?>
				</fieldset>
				<br>
				<button type="submit" class="btn btn-success">Actualizar</button>
			<?php echo $this->Form->end(); ?>	
			</div>
			
	</div>
</div>


<br>
<br>