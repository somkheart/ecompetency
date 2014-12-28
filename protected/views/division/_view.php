<?php
/* @var $this DivisionController */
/* @var $data Division */
?>
dd
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('division_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->division_id), array('view', 'id'=>$data->division_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('division_name')); ?>:</b>
	<?php echo CHtml::encode($data->division_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('department_name')); ?>:</b>
	<?php echo CHtml::encode($data->department_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group_name')); ?>:</b>
	<?php echo CHtml::encode($data->group_id); ?>
	<br />


</div>