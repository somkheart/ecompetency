<?php
/* @var $this CompetencyAssessmentController */
/* @var $data CompetencyAssessment */
?>

<div class="view" id="grid">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ass_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ass_id), array('view', 'id'=>$data->ass_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usercode')); ?>:</b>
	<?php echo CHtml::encode($data->usercode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('position_name')); ?>:</b>
	<?php echo CHtml::encode($data->position_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group_id')); ?>:</b>
	<?php echo CHtml::encode($data->group_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('department_id')); ?>:</b>
	<?php echo CHtml::encode($data->department_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('division_id')); ?>:</b>
	<?php echo CHtml::encode($data->division_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('topic_id')); ?>:</b>
	<?php echo CHtml::encode($data->topic_id); ?>
	<br />

	*/ ?>

</div>
<tr>
               <td ><div style="text-align: center"><?php echo ++$index; ?></div></td>
                <td></td>
                <td>Active</td>
                <td><a class="function-edit">แก้ไข</a><a class="function-delete">ลบ</a></td>