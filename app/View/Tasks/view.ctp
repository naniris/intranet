
	      
<div class="card col-md-6 card-body shadow p-3 mb-5 bg-white rounded container users form"> 
	<div class="col-md-12">
  		<h3 class="card-title text-muted card-header">Titulo: <?php echo h($task['Task']['title']); ?></h3>
  		<br>
  		<h4 class="card-subtitle">ID: <?php echo h($task['Task']['id']); ?></h4>
  		<br>
  		<h4 class="card-subtitle">Descripción:</h4> 
  		<p class="card-text"><?php echo h($task['Task']['description']); ?></p>
  		<br>
  		<h4 class="card-subtitle">Usuario: <?php echo $this->Html->link($task['User']['name'], array('controller' => 'users', 'action' => 'view', $task['User']['id']) , array('class'=>'text-muted')); ?>
  		</h4>
  		<br>
  		<br>
  		<h4 class="card-subtitle">Proyecto: <?php echo $this->Html->link($task['Proyect']['title'], array('controller' => 'proyects', 'action' => 'view', $task['Proyect']['id']), array('class'=>'text-muted')); ?> 
  		</h4>
  		<br>
  		<br>
  		<h4 class="card-subtitle">Prioridad: <?php echo h($task['Task']['prioridad']);?></h4>
	</div>
</div>
<br>
<br>