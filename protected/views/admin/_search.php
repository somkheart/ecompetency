<?php
/* @var $this AdminController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usercode'); ?>
		<?php echo $form->textField($model,'usercode'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'position_code'); ?>
		<?php echo $form->textField($model,'position_code',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'firstname_th'); ?>
		<?php echo $form->textField($model,'firstname_th',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lastname_th'); ?>
		<?php echo $form->textField($model,'lastname_th',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nickname'); ?>
		<?php echo $form->textField($model,'nickname',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fistname_eng'); ?>
		<?php echo $form->textField($model,'fistname_eng',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lastname_eng'); ?>
		<?php echo $form->textField($model,'lastname_eng',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'position_name'); ?>
		<?php echo $form->textField($model,'position_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tel'); ?>
		<?php echo $form->textField($model,'tel',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tel1'); ?>
		<?php echo $form->textField($model,'tel1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tel2'); ?>
		<?php echo $form->textField($model,'tel2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mobile_number'); ?>
		<?php echo $form->textField($model,'mobile_number',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lastLoginTime'); ?>
		<?php echo $form->textField($model,'lastLoginTime'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->