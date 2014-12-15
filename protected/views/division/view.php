<?php
/* @var $this DivisionController */
/* @var $model Division */

$this->breadcrumbs=array(
	'Divisions'=>array('index'),
	$model->division_id,
);

$this->menu=array(
	array('label'=>'List Division', 'url'=>array('index')),
	array('label'=>'Create Division', 'url'=>array('create')),
	array('label'=>'Update Division', 'url'=>array('update', 'id'=>$model->division_id)),
	array('label'=>'Delete Division', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->division_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Division', 'url'=>array('admin')),
);
?>

<h1>View Division #<?php echo $model->division_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'division_id',
		'division_name',
		'status',
		'department_id',
		'group_id',
	),
)); ?>
