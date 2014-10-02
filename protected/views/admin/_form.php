<?php
/* @var $this AdminController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usercode'); ?>
		<?php echo $form->textField($model,'usercode'); ?>
		<?php echo $form->error($model,'usercode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'position_code'); ?>
		<?php echo $form->textField($model,'position_code',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'position_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'firstname_th'); ?>
		<?php echo $form->textField($model,'firstname_th',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'firstname_th'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastname_th'); ?>
		<?php echo $form->textField($model,'lastname_th',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'lastname_th'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nickname'); ?>
		<?php echo $form->textField($model,'nickname',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nickname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fistname_eng'); ?>
		<?php echo $form->textField($model,'fistname_eng',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'fistname_eng'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastname_eng'); ?>
		<?php echo $form->textField($model,'lastname_eng',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'lastname_eng'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'position_name'); ?>
		<?php echo $form->textField($model,'position_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'position_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel'); ?>
		<?php echo $form->textField($model,'tel',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel1'); ?>
		<?php echo $form->textField($model,'tel1'); ?>
		<?php echo $form->error($model,'tel1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel2'); ?>
		<?php echo $form->textField($model,'tel2'); ?>
		<?php echo $form->error($model,'tel2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile_number'); ?>
		<?php echo $form->textField($model,'mobile_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'mobile_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastLoginTime'); ?>
		<?php echo $form->textField($model,'lastLoginTime'); ?>
		<?php echo $form->error($model,'lastLoginTime'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->