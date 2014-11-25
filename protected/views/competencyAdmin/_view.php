<?php
/* @var $this CompetencyAdminController */
/* @var $data CompetencyAdmin */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('usercode')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->usercode), array('view', 'id'=>$data->usercode)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_type')); ?>:</b>
	<?php echo CHtml::encode($data->user_type); ?>
	<br />


</div>