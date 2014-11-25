<?php
/* @var $this CompetencyFunctionListController */
/* @var $data CompetencyFunctionList */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('flist_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->flist_id), array('view', 'id'=>$data->flist_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('function_id')); ?>:</b>
	<?php echo CHtml::encode($data->function_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flist_name')); ?>:</b>
	<?php echo CHtml::encode($data->flist_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flist_status')); ?>:</b>
	<?php echo CHtml::encode($data->flist_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dic1')); ?>:</b>
	<?php echo CHtml::encode($data->dic1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dic2')); ?>:</b>
	<?php echo CHtml::encode($data->dic2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dic3')); ?>:</b>
	<?php echo CHtml::encode($data->dic3); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('dic4')); ?>:</b>
	<?php echo CHtml::encode($data->dic4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dic5')); ?>:</b>
	<?php echo CHtml::encode($data->dic5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dic6')); ?>:</b>
	<?php echo CHtml::encode($data->dic6); ?>
	<br />

	*/ ?>

</div>