<?php
/* @var $this TmpFunctionController */
/* @var $model TmpFunction */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tmp-function-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'usercode'); ?>
		<?php echo $form->textField($model,'usercode',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'usercode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'function_name'); ?>
		<?php echo $form->textField($model,'function_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'function_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dic1'); ?>
		<?php echo $form->textArea($model,'dic1',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'dic1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dic2'); ?>
		<?php echo $form->textArea($model,'dic2',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'dic2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dic3'); ?>
		<?php echo $form->textArea($model,'dic3',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'dic3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dic4'); ?>
		<?php echo $form->textArea($model,'dic4',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'dic4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dic5'); ?>
		<?php echo $form->textArea($model,'dic5',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'dic5'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->