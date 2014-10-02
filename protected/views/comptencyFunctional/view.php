<?php
/* @var $this ComptencyFunctionalController */
/* @var $model ComptencyFunctional */

$this->breadcrumbs=array(
	'Comptency Functionals'=>array('index'),
	$model->function_id,
);

$this->menu=array(
	array('label'=>'List ComptencyFunctional', 'url'=>array('index')),
	array('label'=>'Create ComptencyFunctional', 'url'=>array('create')),
	array('label'=>'Update ComptencyFunctional', 'url'=>array('update', 'id'=>$model->function_id)),
	array('label'=>'Delete ComptencyFunctional', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->function_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ComptencyFunctional', 'url'=>array('admin')),
);
?>

<h1>View ComptencyFunctional #<?php echo $model->function_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'function_id',
		'function_name',
		'function_status',
	),
)); ?>
