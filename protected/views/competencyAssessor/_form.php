<?php
/* @var $this CompetencyAssessorController */
/* @var $model CompetencyAssessor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'competency-assessor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'topic_id'); ?>
		<?php echo $form->textField($model,'topic_id'); ?>
		<?php echo $form->error($model,'topic_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usercode'); ?>
		<?php echo $form->textField($model,'usercode',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'usercode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'assessor_type'); ?>
		<?php echo $form->textField($model,'assessor_type'); ?>
		<?php echo $form->error($model,'assessor_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'assessor_user'); ?>
		<?php echo $form->textField($model,'assessor_user',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'assessor_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
		<?php echo $form->error($model,'create_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_by'); ?>
		<?php echo $form->textField($model,'create_by',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'create_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_date'); ?>
		<?php echo $form->textField($model,'update_date'); ?>
		<?php echo $form->error($model,'update_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_by'); ?>
		<?php echo $form->textField($model,'update_by',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'update_by'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->