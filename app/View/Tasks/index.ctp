<h1 class="text-center">Lista de Usuarios</h1>
<?php 
	   echo $this->Html->link('Registrar', array('action'=>'add'), array('class'=>'btn btn-primary'));
?>
<div class="row mt-5">
	<?php
		foreach ($usuarios as $user): 
	?>
    <div class="col-6 col-md-3 mt-2">
      <div class="card shadow bg-success">
        <div class="card-body text-center">
        	<strong>
					<?php echo $this->Html->link($user['User']['name'], array('action'=>'tareas', $user['User']['id']), array('style'=>'color: black;')); ?>		 	
			</strong>
        </div>
      </div>
	</div>
	<?php	
		endforeach;
	?>
</div>

<br>
<br>