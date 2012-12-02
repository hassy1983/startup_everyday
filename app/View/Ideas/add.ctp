<div class="ideas form">
<?php echo $this->Form->create('Idea'); ?>
	<fieldset>
		<legend><?php echo __('Add Idea'); ?></legend>
	<?php
		echo $this->Form->input('name', array('class' => 'span12'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('一覧表示'), array('action' => 'index')); ?></li>
	</ul>
</div>
