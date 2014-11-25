<?php
/* @var $this UserPositionController */
/* @var $data UserPosition */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('position_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->position_id), array('view', 'id'=>$data->position_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('position_code')); ?>:</b>
	<?php echo CHtml::encode($data->position_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('position_name')); ?>:</b>
	<?php echo CHtml::encode($data->position_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('level')); ?>:</b>
	<?php echo CHtml::encode($data->level); ?>
	<br />


</div>