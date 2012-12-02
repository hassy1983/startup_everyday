<div class="ideas form">
<?php echo $this->Form->create('Idea'); ?>
	<fieldset>
		<legend><?php echo __('Edit Idea'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name', array('class' => 'span12'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Idea.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Idea.id'))); ?></li>
		<li><?php echo $this->Html->link(__('一覧表示'), array('action' => 'index')); ?></li>
	</ul>
</div>
