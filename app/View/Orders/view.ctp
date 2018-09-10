<div class="orders view">
<h2><?php echo __('Order'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($order['Order']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($order['Order']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($order['Order']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($order['Order']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['User']['name'], array('controller' => 'users', 'action' => 'view', $order['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['Status']['name'], array('controller' => 'statuses', 'action' => 'view', $order['Status']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proyect'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['Proyect']['id'], array('controller' => 'proyects', 'action' => 'view', $order['Proyect']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>

