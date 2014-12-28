<?php
/* @var $this TmpFunctionController */
/* @var $model TmpFunction */

$this->breadcrumbs=array(
	'Tmp Functions'=>array('index'),
	$model->tmp_id,
);

$this->menu=array(
	array('label'=>'List TmpFunction', 'url'=>array('index')),
	array('label'=>'Create TmpFunction', 'url'=>array('create')),
	array('label'=>'Update TmpFunction', 'url'=>array('update', 'id'=>$model->tmp_id)),
	array('label'=>'Delete TmpFunction', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tmp_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TmpFunction', 'url'=>array('admin')),
);
?>

<h1>View TmpFunction #<?php echo $model->tmp_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tmp_id',
		'usercode',
		'function_name',
		'dic1',
		'dic2',
		'dic3',
		'dic4',
		'dic5',
	),
)); ?>
