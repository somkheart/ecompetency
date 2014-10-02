<?php
/* @var $this NewsController */
/* @var $model News */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'news-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>



	<div class="row">
		<?php echo $form->labelEx($model,'news_topic'); ?>
		<?php echo $form->textField($model,'news_topic',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'news_topic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'news_detail'); ?>
		<?php echo $form->textArea($model,'news_detail',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'news_detail'); ?>
	</div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->