
<div class="card col-md-6 card-body shadow p-3 mb-5 bg-white rounded container users form"> 
	<div class="users form">
		<?php echo $this->Form->create('Status', array('class'=>'col-md-12')); ?>
			<div class="form-group">
				<fieldset>
					<h3 class="box-title" style="margin-left:30%">Registrar Status</h3>
			<?php
				echo $this->Form->input('name', array('label'=>'Nombre', 'class'=>'form-control'));
				?>
				</fieldset>
				<br>
				<button type="submit" class="btn btn-success">Registrar</button>
			<?php echo $this->Form->end(); ?>	
			</div>
			
	</div>
</div>