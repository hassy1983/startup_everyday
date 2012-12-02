<div class="ideas index">
	<h2><?php echo __('Ideas'); ?></h2>
	<ul>
	<?php foreach ($ideas as $idea): ?>
		<li class="well">
    		<span class="span7"><?php echo $this->Html->link(h($idea['Idea']['name']), array('action' => 'view', $idea['Idea']['id']));?>&nbsp;</span>
    		<span class="span3">
    			<?php echo $this->Html->link(__('いいね!'), '#', array('class' => 'btn btn-primary', 'onClick' => 'window.alert("未実装です")')); ?>
    			<?php echo $this->Html->link(__('詳しく教えて'), '#', array('class' => 'btn btn-danger', 'onClick' => 'window.alert("未実装です")')); ?>
    		</span>
		</li>
    <?php endforeach; ?>
	</ul>
	<div class="row">
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</div>

	<div class="row">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('アイデアを追加する'), array('action' => 'add')); ?></li>
	</ul>
</div>
