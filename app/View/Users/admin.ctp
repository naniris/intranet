<h2>Lista de Usuarios</h2>
<?php  echo $this->Html->link(__('Registrar'), array('controller'=>'users','action' => 'add'), array('class'=>'btn btn-primary')); 
?>
<br>
<br>
<table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Contraseña</th>
      <th scope="col">Ocupación</th>
      <th scope="col">Rol</th>
      <th scope="col">Created</th>
      <th scope="col">Modified</th>
      <th scope="col" class="actions">Actions</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($users1 as $user): ?>
    <tr>
	  <td><?php echo h($user['User']['id']); ?>&nbsp;</td>
	  <td><?php echo h($user['User']['name']); ?>&nbsp;</td>
	  <td><?php echo h($user['User']['pass']); ?>&nbsp;</td>
      <td><?php echo h($user['User']['ocupation']); ?>&nbsp;</td>
      <td><?php echo h($user['User']['type']); ?>&nbsp;</td>
      <td><?php echo h($user['User']['created']); ?>&nbsp;</td>
	  <td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
	  <td class="actions">
		<a>
			<?php echo $this->Html->link(__(''), array('action' => 'view', $user['User']['id']), array('class'=>'btn btn-primary far fa-eye')); ?>	
		</a>	
		<a>
			<?php echo $this->Html->link(__(''), array('action' => 'edit', $user['User']['id']), array('class'=>'btn btn-info fas fa-user-edit')); ?>
		</a>
	    <a>
			<?php echo $this->Form->postLink(__(''), array('action' => 'delete', $user['User']['id']), array('class'=>'btn btn-danger fas fa-user-times' ,'confirm' => __('Estas seguró de eliminar el # %s?', $user['User']['id']))); ?>
		</a>	
	  </td>
    </tr>
	<?php endforeach; ?>
  </tbody>
</table>