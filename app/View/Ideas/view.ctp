<div class="ideas view">
<h2><?php  echo __('Idea'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($idea['Idea']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($idea['Idea']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($idea['Idea']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($idea['Idea']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Idea'), array('action' => 'edit', $idea['Idea']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Idea'), array('action' => 'delete', $idea['Idea']['id']), null, __('Are you sure you want to delete # %s?', $idea['Idea']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ideas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Idea'), array('action' => 'add')); ?> </li>
	</ul>
</div>
