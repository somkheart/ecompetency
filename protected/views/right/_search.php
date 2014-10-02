<?php
/* @var $this RightController */
/* @var $model Right */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'right_id'); ?>
		<?php echo $form->textField($model,'right_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'right_name'); ?>
		<?php echo $form->textField($model,'right_name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->