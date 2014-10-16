<?php
/* @var $this WorkgroupController */
/* @var $model Workgroup */

$this->breadcrumbs=array(
	'Workgroups'=>array('index'),
	$model->group_id,
);

$this->menu=array(
	array('label'=>'List Workgroup', 'url'=>array('index')),
	array('label'=>'Create Workgroup', 'url'=>array('create')),
	array('label'=>'Update Workgroup', 'url'=>array('update', 'id'=>$model->group_id)),
	array('label'=>'Delete Workgroup', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->group_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Workgroup', 'url'=>array('admin')),
);
?>

<h1>View Workgroup #<?php echo $model->group_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'group_id',
		'group_name',
		'create_date',
		'crete_by',
		'update_date',
		'update_by',
		'group_type',
	),
)); ?>
