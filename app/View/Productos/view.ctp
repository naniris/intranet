<div class="productos view">
<h2><?php echo __('Producto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Producto'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['producto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Marca'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['marca']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modelo'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['modelo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Producto'), array('action' => 'edit', $producto['Producto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Producto'), array('action' => 'delete', $producto['Producto']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $producto['Producto']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('action' => 'add')); ?> </li>
	</ul>
</div>
