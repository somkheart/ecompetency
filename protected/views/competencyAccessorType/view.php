<?php
/* @var $this CompetencyAccessorTypeController */
/* @var $model CompetencyAccessorType */

$this->breadcrumbs=array(
	'Competency Accessor Types'=>array('index'),
	$model->type_id,
);

$this->menu=array(
	array('label'=>'List CompetencyAccessorType', 'url'=>array('index')),
	array('label'=>'Create CompetencyAccessorType', 'url'=>array('create')),
	array('label'=>'Update CompetencyAccessorType', 'url'=>array('update', 'id'=>$model->type_id)),
	array('label'=>'Delete CompetencyAccessorType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->type_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CompetencyAccessorType', 'url'=>array('admin')),
);
?>

<h1>View CompetencyAccessorType #<?php echo $model->type_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'type_id',
		'type_name',
		'score',
		'core_flag',
		'managerial_flag',
		'function_flag',
	),
)); ?>
