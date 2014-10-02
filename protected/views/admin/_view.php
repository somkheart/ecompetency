<?php
/* @var $this AdminController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usercode')); ?>:</b>
	<?php echo CHtml::encode($data->usercode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('position_code')); ?>:</b>
	<?php echo CHtml::encode($data->position_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('firstname_th')); ?>:</b>
	<?php echo CHtml::encode($data->firstname_th); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastname_th')); ?>:</b>
	<?php echo CHtml::encode($data->lastname_th); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nickname')); ?>:</b>
	<?php echo CHtml::encode($data->nickname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fistname_eng')); ?>:</b>
	<?php echo CHtml::encode($data->fistname_eng); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('lastname_eng')); ?>:</b>
	<?php echo CHtml::encode($data->lastname_eng); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('position_name')); ?>:</b>
	<?php echo CHtml::encode($data->position_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel')); ?>:</b>
	<?php echo CHtml::encode($data->tel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel1')); ?>:</b>
	<?php echo CHtml::encode($data->tel1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel2')); ?>:</b>
	<?php echo CHtml::encode($data->tel2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mobile_number')); ?>:</b>
	<?php echo CHtml::encode($data->mobile_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastLoginTime')); ?>:</b>
	<?php echo CHtml::encode($data->lastLoginTime); ?>
	<br />

	*/ ?>

</div>