<?php
/* @var $this ComptencyFunctionalController */
/* @var $model ComptencyFunctional */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'function_id'); ?>
		<?php echo $form->textField($model,'function_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'function_name'); ?>
		<?php echo $form->textField($model,'function_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'function_status'); ?>
		<?php echo $form->textField($model,'function_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'function_type'); ?>
		<?php echo $form->textField($model,'function_type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->