<?php
/* @var $this ComptencyFunctionalController */
/* @var $model ComptencyFunctional */

$this->breadcrumbs=array(
	'Comptency Functionals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ComptencyFunctional', 'url'=>array('index')),
	array('label'=>'Manage ComptencyFunctional', 'url'=>array('admin')),
);
?>
<h1>เพิ่มรายการประเมิน Functional Competency</h1>

<?php echo CHtml::beginForm(); ?>
<div class="row functioname" style="padding:10px">
        <?php echo CHtml::activeLabel($model,'function_name'); ?>
        <?php echo CHtml::activeTextField($model,'function_name'); ?>
</div>
<div class="row submit"activeTextField style="padding:10px">
        <?php echo CHtml::submitButton('บันทึกข้อมูล'); ?>
        <?php echo CHtml::submitButton('ยกเลิก'); ?>
</div>
<div class="row cancle">
</div>
 <?php echo CHtml::endForm(); ?>
</div><!-- form -->
