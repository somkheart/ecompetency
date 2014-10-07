<?php
/* @var $this CompetencyAccessorTypeController */
/* @var $data CompetencyAccessorType */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->type_id), array('view', 'id'=>$data->type_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_name')); ?>:</b>
	<?php echo CHtml::encode($data->type_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('score')); ?>:</b>
	<?php echo CHtml::encode($data->score); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('core_flag')); ?>:</b>
	<?php echo CHtml::encode($data->core_flag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('managerial_flag')); ?>:</b>
	<?php echo CHtml::encode($data->managerial_flag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('function_flag')); ?>:</b>
	<?php echo CHtml::encode($data->function_flag); ?>
	<br />


</div>