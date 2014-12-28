<?php
/* @var $this TmpFunctionController */
/* @var $model TmpFunction */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'tmp_id'); ?>
		<?php echo $form->textField($model,'tmp_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usercode'); ?>
		<?php echo $form->textField($model,'usercode',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'function_name'); ?>
		<?php echo $form->textField($model,'function_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dic1'); ?>
		<?php echo $form->textArea($model,'dic1',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dic2'); ?>
		<?php echo $form->textArea($model,'dic2',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dic3'); ?>
		<?php echo $form->textArea($model,'dic3',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dic4'); ?>
		<?php echo $form->textArea($model,'dic4',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dic5'); ?>
		<?php echo $form->textArea($model,'dic5',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->