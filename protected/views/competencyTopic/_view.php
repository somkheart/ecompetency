<?php
/* @var $this CompetencyTopicController */
/* @var $data CompetencyTopic */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('topic_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->topic_id), array('view', 'id'=>$data->topic_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('topic_name')); ?>:</b>
	<?php echo CHtml::encode($data->topic_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('topic_status')); ?>:</b>
	<?php echo CHtml::encode($data->topic_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_date')); ?>:</b>
	<?php echo CHtml::encode($data->create_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_by')); ?>:</b>
	<?php echo CHtml::encode($data->create_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_date')); ?>:</b>
	<?php echo CHtml::encode($data->update_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_by')); ?>:</b>
	<?php echo CHtml::encode($data->update_by); ?>
	<br />


</div>