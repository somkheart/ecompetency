<?php
/* @var $this TmpFunctionController */
/* @var $data TmpFunction */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tmp_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tmp_id), array('view', 'id'=>$data->tmp_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usercode')); ?>:</b>
	<?php echo CHtml::encode($data->usercode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('function_name')); ?>:</b>
	<?php echo CHtml::encode($data->function_name); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('dic4')); ?>:</b>
	<?php echo CHtml::encode($data->dic4); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('dic5')); ?>:</b>
	<?php echo CHtml::encode($data->dic5); ?>
	<br />

	*/ ?>

</div>