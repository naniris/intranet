

<div class="card col-md-6 card-body shadow p-3 m-5 bg-white rounded container tasks form">
	<div class="tasks form">
	<?php echo $this->Form->create('Task', array('class'=>'col-md-12')); ?>
		<div class="form-group">
			<fieldset>
				<h3 class="box-title" style="margin-left:30%">Nueva Tarea</h3>
			<?php
				echo $this->Form->input('title', array('class'=>'form-control'));
				echo $this->Form->input('description' , array('class'=>'form-control'));
				echo $this->Form->input('user_id', array('class'=>'form-control'));
				echo $this->Form->input('proyect_id', array('class'=>'form-control'));
				echo $this->Form->input('prioridad', array('options'=>array('Alta'=>'Alta','Media'=>'Media','Baja'=>'Baja'),'class'=>' bg-light btn-block','label'=>'Nivel Prioridad'));
			?>
			</fieldset>
			<br>
			<button type="submit" class="btn btn-success">Registrar</button>
		<?php echo $this->Form->end(); ?>
		</div>
	</div>
</div>