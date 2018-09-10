<h2>Ordenes de trabajo</h2>
<br>
<table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">Cliente</th>
      <th scope="col">Created</th>
      <th scope="col">Modified</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($proyectos as $order): ?>
    <tr>
	  <td>
			<?php echo $this->Html->link($order['Proyect']['title'], array('action' => 'ordenes', $order['Proyect']['id'])); ?>
	  </td>
      <td><?php echo h($order['Proyect']['created']); ?>&nbsp;</td>
	  <td><?php echo h($order['Proyect']['modified']); ?>&nbsp;</td>	  
    </tr>
	<?php endforeach; ?>
  </tbody>
</table>
