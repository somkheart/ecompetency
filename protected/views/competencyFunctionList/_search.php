<?php
/* @var $this CompetencyFunctionListController */
/* @var $model CompetencyFunctionList */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'flist_id'); ?>
		<?php echo $form->textField($model,'flist_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'function_id'); ?>
		<?php echo $form->textField($model,'function_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'flist_name'); ?>
		<?php echo $form->textField($model,'flist_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'flist_status'); ?>
		<?php echo $form->textField($model,'flist_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dic1'); ?>
		<?php echo $form->textField($model,'dic1',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dic2'); ?>
		<?php echo $form->textField($model,'dic2',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dic3'); ?>
		<?php echo $form->textField($model,'dic3',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dic4'); ?>
		<?php echo $form->textField($model,'dic4',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dic5'); ?>
		<?php echo $form->textField($model,'dic5',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dic6'); ?>
		<?php echo $form->textField($model,'dic6',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->