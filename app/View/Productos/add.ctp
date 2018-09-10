<div class="productos form">
<?php echo $this->Form->create('Producto'); ?>
	<fieldset>
		<legend><?php echo __('Add Producto'); ?></legend>
	<?php
		echo $this->Form->input('producto');
		echo $this->Form->input('marca');
		echo $this->Form->input('modelo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Productos'), array('action' => 'index')); ?></li>
	</ul>
</div>
