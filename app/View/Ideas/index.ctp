<div class="ideas index">
	<h2><?php echo __('Ideas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($ideas as $idea): ?>
	<tr>
		<td><?php echo h($idea['Idea']['id']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link(h($idea['Idea']['name']), array('action' => 'view', $idea['Idea']['id']));?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('いいね!'), '#', array('class' => 'like', 'onClick' => 'window.alert("未実装です")')); ?>
			<?php echo $this->Html->link(__('詳しく教えて'), '#', array('class' => 'tellme', 'onClick' => 'window.alert("未実装です")')); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
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
