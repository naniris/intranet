
<div class="card col-md-6 card-body shadow p-3 mb-5 bg-white rounded container users form"> 
	<div class="users form">
		<?php echo $this->Form->create('Order', array('class'=>'col-md-12')); ?>
			<div class="form-group">
				<fieldset>
					<h3 class="box-title" style="margin-left:30%">Editar Orden</h3>
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('description', array('label'=>'Descripción', 'class'=>'form-control'));
				echo $this->Form->input('hours', array('label'=>'Horas', 'class'=>'form-control'));
				echo $this->Form->input('user_id', array('label'=>'Usuario' , 'class'=>'form-control'));
				echo $this->Form->input('status_id', array('label'=>'Status', 'class'=>'form-control'));
				echo $this->Form->input('proyect_id', array('label'=>'Proyecto', 'class'=>'form-control'));	
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