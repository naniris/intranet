<nav class="navbar navbar-expand-lg navbar-light bg-danger">
  	<a class="navbar-brand" href="#"> <img src="../img/tropaicon.png" width="100px" alt=""> </a>
	  <a>
   		<?php echo $this->Html->link(__('Proyectos'), array('controller' => 'proyects', 'action' => 'index'), array('class'=>'nav-link', 'style'=>'text-align: center;','class'=>'navbar-brand'));?>
      </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      	<li class="nav-item">
	          <a>
	          <?php echo $this->Html->link(__('Usuarios'), array('controller'=>'users', 'action' => 'admin'), array('class'=>'nav-link', 'style'=>'text-align: center;')); ?>	
	          </a>
	      	</li>
	      	<li class="nav-item">
	        	<a>
	        		<?php echo $this->Html->link(__('Tareas'), array('controller' => 'tasks', 'action' => 'index'), array('class'=>'nav-link', 'style'=>'text-align: center;'));?>
	        	</a>
	      	</li>
	       	<li class="nav-item">
	          <a>
	           <?php echo $this->Html->link(__('Status'), array('controller'=>'statuses', 'action' => 'index'), array('class'=>'nav-link', 'style'=>'text-align: center;')); ?>	
	          </a>
	      	</li>
	       	<li class="nav-item">
        	  <a>
        		<?php echo $this->Html->link(__('Proyectos'), array('controller' => 'proyects', 'action' => 'index'), array('class'=>'nav-link', 'style'=>'text-align: center;', 'class'=>'d-none'));?>
        	  </a>
	      	</li>
	    </ul>
	    <form class="form-inline my-2 my-lg-0">
	      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Salir</button>
	    </form>
	  </div>
	</nav>


<br>
<br>

<h3> </h3>
<div class="card col-md-6 card-body shadow p-3 mb-5 bg-white rounded container users form"> 
	<div class="col-md-12 card-header text-muted">
  		<h3>ID: <?php echo h($status['Status']['id']); ?></h3>
  		<br>
  		<h4>Titulo: <?php echo h($status['Status']['name']); ?></h4>
	</div>
</div>
<br>
<br>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Status'), array('action' => 'edit', $status['Status']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Status'), array('action' => 'delete', $status['Status']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $status['Status']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Orders'); ?></h3>
	<?php if (!empty($status['Order'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Status Id'); ?></th>
		<th><?php echo __('Proyect Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($status['Order'] as $order): ?>
		<tr>
			<td><?php echo $order['id']; ?></td>
			<td><?php echo $order['description']; ?></td>
			<td><?php echo $order['created']; ?></td>
			<td><?php echo $order['modified']; ?></td>
			<td><?php echo $order['user_id']; ?></td>
			<td><?php echo $order['status_id']; ?></td>
			<td><?php echo $order['proyect_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'orders', 'action' => 'view', $order['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'orders', 'action' => 'edit', $order['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'orders', 'action' => 'delete', $order['id']), array('confirm' => __('Are you sure you want to delete # %s?', $order['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
