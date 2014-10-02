<?php
/* @var $this RightController */
/* @var $model Right */

$this->breadcrumbs=array(
	'Rights'=>array('index'),
	$model->right_id,
);

$this->menu=array(
	array('label'=>'List Right', 'url'=>array('index')),
	array('label'=>'Create Right', 'url'=>array('create')),
	array('label'=>'Update Right', 'url'=>array('update', 'id'=>$model->right_id)),
	array('label'=>'Delete Right', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->right_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Right', 'url'=>array('admin')),
);
?>

<h1>View Right #<?php echo $model->right_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'right_id',
		'right_name',
	),
)); ?>
