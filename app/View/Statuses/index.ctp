<h2>Lista de Status</h2>
<?php 
    echo $this->Html->link('Registrar', array('controller'=>'statuses', 'action'=>'add'), array('class'=>'btn btn-primary'));
?>
<br>
<br>
<table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Created</th>
      <th scope="col">Modified</th>
      <th scope="col" class="actions">Actions</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($statuses as $status): ?>
    <tr>
	  <td><?php echo h($status['Status']['id']); ?>&nbsp;</td>
	  <td><?php echo h($status['Status']['name']); ?>&nbsp;</td>
      <td><?php echo h($status['Status']['created']); ?>&nbsp;</td>
	  <td><?php echo h($status['Status']['modified']); ?>&nbsp;</td>
	  <td class="actions">	
		<a>
			<?php echo $this->Html->link(__(''), array('action' => 'edit', $status['Status']['id']), array('class'=>'btn btn-info fas fa-edit')); ?>
		</a>
	    <a>
			<?php echo $this->Form->postLink(__(''), array('action' => 'delete', $status['Status']['id']), array('class'=>'btn btn-danger fas fa-trash' ,'confirm' => __('Esta seguro de eliminar el estatus %s?', $status['Status']['name']))); ?>
		</a>	

	  </td>
    </tr>
	<?php endforeach; ?>
  </tbody>
</table>

<br>