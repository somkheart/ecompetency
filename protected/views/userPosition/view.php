<?php
/* @var $this UserPositionController */
/* @var $model UserPosition */

$this->breadcrumbs=array(
	'User Positions'=>array('index'),
	$model->position_id,
);

$this->menu=array(
	array('label'=>'List UserPosition', 'url'=>array('index')),
	array('label'=>'Create UserPosition', 'url'=>array('create')),
	array('label'=>'Update UserPosition', 'url'=>array('update', 'id'=>$model->position_id)),
	array('label'=>'Delete UserPosition', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->position_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserPosition', 'url'=>array('admin')),
);
?>

<h1>View UserPosition #<?php echo $model->position_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'position_code',
		'position_name',
		'level',
		'position_id',
	),
)); ?>
