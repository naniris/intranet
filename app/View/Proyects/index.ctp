<h2>Lista de Proyectos</h2>
<?php 
   echo $this->Html->link('Registrar', array('controller'=>'proyects', 'action'=>'add'), array('class'=>'btn btn-primary'));
?>
<br>
<br>
<table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">Cliente</th>
      <th scope="col">Created</th>
      <th scope="col">Modified</th>
      <th scope="col" class="actions">Actions</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($proyects as $proyect): ?>
    <tr>
	  <td><?php echo h($proyect['Proyect']['title']); ?>&nbsp;</td>
      <td><?php echo h($proyect['Proyect']['created']); ?>&nbsp;</td>
      <td><?php echo h($proyect['Proyect']['modified']); ?></td>
	  <td class="actions">
		<a>
			<?php echo $this->Html->link(__(''), array('action' => 'view', $proyect['Proyect']['id']), array('class'=>'btn btn-primary far fa-eye')); ?>	
		</a>	
		<a>
			<?php echo $this->Html->link(__(''), array('action' => 'edit', $proyect['Proyect']['id']), array('class'=>'btn btn-info fas fa-edit')); ?>
		</a>
	    <a>
			<?php echo $this->Form->postLink(__(''), array('action' => 'delete', $proyect['Proyect']['id']), array('class'=>'btn btn-danger fas fa-trash' ,'confirm' => __('Estas seguro de eliminar el # %s?', $proyect['Proyect']['id']))); ?>
		</a>	
	  </td>
    </tr>
	<?php endforeach; ?>
  </tbody>
</table>

<br>
