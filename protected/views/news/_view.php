<?php
/* @var $this NewsController */
/* @var $data News */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('news_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->news_id), array('view', 'id'=>$data->news_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('news_topic')); ?>:</b>
	<?php echo CHtml::encode($data->news_topic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('news_detail')); ?>:</b>
	<?php echo CHtml::encode($data->news_detail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creation_time')); ?>:</b>
	<?php echo CHtml::encode($data->creation_time); ?>
	<br />


</div>