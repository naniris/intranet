<?php 

	if($ordenes){
		echo "<label><h4>Proyecto:</h4></label>&nbsp;";
		echo ($ordenes[0]['Proyect']['title']);
		echo ("<br>");
	}else{
		echo "<h4>No se generaron ordenes</h4>";
		echo ("<br>");
	}

?>

<br>
<table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">Número de orden</th>
      <th scope="col">Descripción</th>
      <th scope="col">Horas</th>
      <th scope="col">Status</th>
      <th scope="col">Responsable</th>
      <th scope="col" class="actions">Actions</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($ordenes as $order): ?>
    <tr>
	  <td>
			<?php echo h($order['Order']['id']); ?>
	  </td>
      <td><?php echo h($order['Order']['description']); ?>&nbsp;</td>
	  <td><?php echo h($order['Order']['hours']); ?>&nbsp;</td>
	  <td><?php echo h($order['Status']['name']); ?>&nbsp;</td>
	  <td><?php echo h($order['User']['name']); ?>&nbsp;</td>

	  <td class="actions">
			<?php echo $this->Html->link(__(''), array('action' => 'ver', $order['Order']['id']), array('class'=>'btn btn-info far fa-eye')); ?>
			<?php echo $this->Html->link(__(''), array('action' => 'edit', $order['Order']['id']), array('class'=>'btn btn-primary fas fa-edit')); ?>
			<?php echo $this->Form->postLink(__(''), array('action' => 'delete', $order['Order']['id']), array('class'=>'btn btn-danger fas fa-trash', 'confirm' => __('Estas seguro que desea eliminar la orden # %s?', $order['Order']['id']))); ?>
	  </td>
	
    </tr>
	<?php endforeach; ?>
  </tbody>
</table>


<?php 

	$sumar = 0; 
	$hora2 = 0;
?>

<?php foreach ($ordenes as $order): ?>

<?php
	$hora2 = $sumar + $order['Order']['hours']; 
	$sumar += $order['Order']['hours'];
?>

<?php endforeach; ?>


<br>
<h3>Horas Reales: <?php echo($hora2); ?></h3>