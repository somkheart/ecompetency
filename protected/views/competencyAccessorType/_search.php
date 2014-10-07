<?php
/* @var $this CompetencyAccessorTypeController */
/* @var $model CompetencyAccessorType */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'type_id'); ?>
		<?php echo $form->textField($model,'type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type_name'); ?>
		<?php echo $form->textField($model,'type_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'score'); ?>
		<?php echo $form->textField($model,'score'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'core_flag'); ?>
		<?php echo $form->textField($model,'core_flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'managerial_flag'); ?>
		<?php echo $form->textField($model,'managerial_flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'function_flag'); ?>
		<?php echo $form->textField($model,'function_flag'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->