<?php
/* @var $this CompetencyAssessorController */
/* @var $data CompetencyAssessor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('assessor_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->assessor_id), array('view', 'id'=>$data->assessor_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('topic_id')); ?>:</b>
	<?php echo CHtml::encode($data->topic_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usercode')); ?>:</b>
	<?php echo CHtml::encode($data->usercode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('assessor_type')); ?>:</b>
	<?php echo CHtml::encode($data->assessor_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('assessor_user')); ?>:</b>
	<?php echo CHtml::encode($data->assessor_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_date')); ?>:</b>
	<?php echo CHtml::encode($data->create_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_by')); ?>:</b>
	<?php echo CHtml::encode($data->create_by); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('update_date')); ?>:</b>
	<?php echo CHtml::encode($data->update_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_by')); ?>:</b>
	<?php echo CHtml::encode($data->update_by); ?>
	<br />

	*/ ?>

</div>