<div class="ideas index">
	<div class="row">
    	<ul class="span13">
    	<?php foreach ($ideas as $idea): ?>
    		<li class="well">
        		<span class="span8"><?php echo $this->Html->link(h($idea['Idea']['name']), array('action' => 'view', $idea['Idea']['id']));?>&nbsp;</span>
        		<span class="span3">
        			<?php echo $this->Html->link(__('いいね!'), '#', array('class' => 'btn btn-primary', 'onClick' => 'window.alert("未実装です")')); ?>
        			<?php echo $this->Html->link(__('詳しく教えて'), '#', array('class' => 'btn btn-danger', 'onClick' => 'window.alert("未実装です")')); ?>
        		</span>
    		</li>
        <?php endforeach; ?>
    	</ul>
	</div>
	<div class="row pagination pagination-centered">
    	<ul>
	    	<?php echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentClass' => 'active'));?>
    	</ul>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('アイデアを追加する'), array('action' => 'add')); ?></li>
	</ul>
</div>
