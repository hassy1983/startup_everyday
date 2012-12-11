<div class="ideas index">
	<div class="row">
		ソート
		<?php echo $this->Paginator->sort('id', '投稿順'); ?>
		<?php echo $this->Paginator->sort('like_count', 'いいね!順'); ?>
    	<ul class="span12">
    	<?php foreach ($ideas as $idea): ?>
    		<li class="well">
        		<span class="span8"><?php echo $this->Html->link(h($idea['Idea']['name']), array('action' => 'view', $idea['Idea']['id']));?>&nbsp;</span>
        		<span class="span3">
        			<?php echo $this->Html->link(__('いいね!') . $this->Html->tag('span', $idea['Idea']['like_count'], array('class' => 'label')), '#cancel', array('id' => 'idea_' . $idea['Idea']['id'], 'class' => 'btn btn-primary like', 'value' => $idea['Idea']['id'], 'escape' => false)); ?>
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
