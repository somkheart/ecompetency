<?php
/* @var $this ComptencyFunctionalController */
/* @var $model ComptencyFunctional */

$this->breadcrumbs=array(
	'Comptency Functionals'=>array('index'),
	$model->function_id=>array('view','id'=>$model->function_id),
	'Update',
);
/*
$this->menu=array(
	array('label'=>'List ComptencyFunctional', 'url'=>array('index')),
	array('label'=>'Create ComptencyFunctional', 'url'=>array('create')),
	array('label'=>'View ComptencyFunctional', 'url'=>array('view', 'id'=>$model->function_id)),
	array('label'=>'Manage ComptencyFunctional', 'url'=>array('admin')),
);
 * 
 */
?>

<h1>แก้ไข Functional Competency </h1>
<?php echo CHtml::beginForm(); ?>
<div class="row functioname" style="padding:10px">
    <?php echo CHtml::activeLabel($model, 'function_name'); ?>
    <?php echo CHtml::activeTextField($model, 'function_name', array('size' => 50)); ?>
</div>
<div id="funclistupdate">
</div>

<div class="row submit"activeTextField style="padding:10px;" style="text-align: center">
<?php echo CHtml::submitButton('บันทึกข้อมูล', array('class' => 'k-button', 'style' => 'text-align:center')); ?>
<?php echo CHtml::submitButton('ยกเลิก', array('class' => 'k-button', 'style' => 'text-align:center')); ?>
</div>
<div class="row cancle">
</div>
<?php
print_r($funclist);
    foreach($funclist as $item)
    {
       print_r($item);;
    }
?>
<?php echo CHtml::endForm(); ?>
</div><!-- form -->
