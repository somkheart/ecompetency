<?php
/* @var $this ComptencyFunctionalController */
/* @var $data ComptencyFunctional */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('function_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->function_id), array('view', 'id'=>$data->function_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('function_name')); ?>:</b>
	<?php echo CHtml::encode($data->function_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('function_status')); ?>:</b>
	<?php echo CHtml::encode($data->function_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('function_type')); ?>:</b>
	<?php echo CHtml::encode($data->function_type); ?>
	<br />


</div>