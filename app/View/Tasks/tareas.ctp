
<h1 class="text-center">Lista de tareas</h1>

<br>
<table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">Título</th>
      <th scope="col">Descripción</th>
      <th scope="col">Cliente</th>
      <th scope="col">Prioridad</th>
      <th scope="col">Created</th>
 
      <th scope="col" class="actions">Actions</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($task as $tareas): ?>
    <tr>
		<td><?php echo h($tareas['Task']['title']); ?>&nbsp;</td>
		<td><?php echo h($tareas['Task']['description']); ?>&nbsp;</td>
		<td><?php echo h($tareas['Proyect']['title']);?></td>
		<td><?php echo h($tareas['Task']['prioridad']); ?></td>
	    <td><?php echo h($tareas['Task']['created']); ?>&nbsp;</td>  
		<td class="actions">
			<a>
				<?php echo $this->Html->link(__(''), array('action' => 'edit', $tareas['Task']['id']), array('class'=>'btn btn-info fas fa-edit')); ?>
			</a>
			<a>
				<?php echo $this->Form->postLink(__(''), array('action' => 'delete', $tareas['Task']['id']), array('class'=>'btn btn-danger fas fa-trash','confirm' => __('Estas seguró de eliminar la tarea?'))); ?>
			</a>
		</td>
    </tr>
	<?php endforeach; ?>
  </tbody>
</table>



<br>
<br>
