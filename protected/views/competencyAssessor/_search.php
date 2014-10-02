<?php
/* @var $this CompetencyAssessorController */
/* @var $model CompetencyAssessor */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'topic_id'); ?>
		<?php echo $form->textField($model,'topic_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'assessor_id'); ?>
		<?php echo $form->textField($model,'assessor_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usercode'); ?>
		<?php echo $form->textField($model,'usercode',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'assessor_type'); ?>
		<?php echo $form->textField($model,'assessor_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'assessor_user'); ?>
		<?php echo $form->textField($model,'assessor_user',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_by'); ?>
		<?php echo $form->textField($model,'create_by',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_date'); ?>
		<?php echo $form->textField($model,'update_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_by'); ?>
		<?php echo $form->textField($model,'update_by',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->