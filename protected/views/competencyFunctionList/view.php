<?php
/* @var $this CompetencyFunctionListController */
/* @var $model CompetencyFunctionList */

$this->breadcrumbs=array(
	'Competency Function Lists'=>array('index'),
	$model->flist_id,
);

$this->menu=array(
	array('label'=>'List CompetencyFunctionList', 'url'=>array('index')),
	array('label'=>'Create CompetencyFunctionList', 'url'=>array('create')),
	array('label'=>'Update CompetencyFunctionList', 'url'=>array('update', 'id'=>$model->flist_id)),
	array('label'=>'Delete CompetencyFunctionList', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->flist_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CompetencyFunctionList', 'url'=>array('admin')),
);
?>

<h1>View CompetencyFunctionList #<?php echo $model->flist_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'flist_id',
		'function_id',
		'flist_name',
		'flist_status',
		'dic1',
		'dic2',
		'dic3',
		'dic4',
		'dic5',
		'dic6',
	),
)); ?>
