
<div class="card col-md-6 card-body shadow p-3 m-5 bg-white rounded container tasks form">
	<div class="tasks form">
	<?php echo $this->Form->create('Task', array('class'=>'col-md-12')); ?>
		<div class="form-group">
			<fieldset>
				<h3 class="box-title" style="margin-left:30%">Editar Tarea</h3>
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('title', array('class'=>'form-control', 'label'=>'Título'));
				echo $this->Form->input('description' , array('class'=>'form-control', 'label'=>'Descripción'));
				echo $this->Form->input('user_id', array('class'=>'form-control', 'label'=>'Usuario'));
				echo $this->Form->input('proyect_id', array('class'=>'form-control', 'label'=>'Proyecto'));
				echo $this->Form->input('prioridad', array('class'=>'form-control', 'label'=>'Prioridad'));
			?>
			</fieldset>
			<br>
			<button type="submit" class="btn btn-success">Actualizar</button>
		<?php echo $this->Form->end(); ?>
		</div>
	</div>
</div>