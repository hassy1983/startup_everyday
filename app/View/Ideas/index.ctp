<div class="ideas index">
	<div class="row">
    	<ul class="span12">
    	<?php 
    	foreach ($ideas as $idea):
    	$count = count($idea['Like']);
    	?>
    		<li class="well">
        		<span class="span8"><?php echo $this->Html->link(h($idea['Idea']['name']), array('action' => 'view', $idea['Idea']['id']));?>&nbsp;</span>
        		<span class="span3">
        			<?php echo $this->Html->link(__('いいね!') . $this->Html->tag('span', $count, array('class' => 'label')), '#cancel', array('id' => 'idea_' . $idea['Idea']['id'], 'class' => 'btn btn-primary like', 'value' => $idea['Idea']['id'], 'escape' => false)); ?>
        			<?php echo $this->Html->link(__('教えて'), '#cancel', array('class' => 'btn btn-danger', 'onClick' => 'window.alert("未実装です")')); ?>
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
<script type="text/javascript">
$(document).ready(function(){
	$(function(){
	    $('a[href=#cancel]').click(function(){
	        return false;
	    })
	});
	$('.like').one('click', function(){
		var ideaId = $(this).attr('value');
		var likeCount = $(this).children('span').text();
    	$.ajax({
            type: 'POST',
            url: '/likes/add/' + ideaId,
            data: '',
            success: $(this).children('span').html(parseInt(likeCount) + 1)
    	});
	});
});
</script>
