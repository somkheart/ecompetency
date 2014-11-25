<?php
/* @var $this CompetencyFunctionListController */
/* @var $model CompetencyFunctionList */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'competency-function-list-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'function_id'); ?>
		<?php echo $form->textField($model,'function_id'); ?>
		<?php echo $form->error($model,'function_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'flist_name'); ?>
		<?php echo $form->textField($model,'flist_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'flist_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'flist_status'); ?>
		<?php echo $form->textField($model,'flist_status'); ?>
		<?php echo $form->error($model,'flist_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dic1'); ?>
		<?php echo $form->textField($model,'dic1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'dic1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dic2'); ?>
		<?php echo $form->textField($model,'dic2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'dic2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dic3'); ?>
		<?php echo $form->textField($model,'dic3',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'dic3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dic4'); ?>
		<?php echo $form->textField($model,'dic4',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'dic4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dic5'); ?>
		<?php echo $form->textField($model,'dic5',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'dic5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dic6'); ?>
		<?php echo $form->textField($model,'dic6',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'dic6'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->