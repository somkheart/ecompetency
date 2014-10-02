<?php
/* @var $this ComptencyFunctionalController */
/* @var $model ComptencyFunctional */

$this->breadcrumbs=array(
	'Comptency Functionals'=>array('index'),
	$model->function_id=>array('view','id'=>$model->function_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ComptencyFunctional', 'url'=>array('index')),
	array('label'=>'Create ComptencyFunctional', 'url'=>array('create')),
	array('label'=>'View ComptencyFunctional', 'url'=>array('view', 'id'=>$model->function_id)),
	array('label'=>'Manage ComptencyFunctional', 'url'=>array('admin')),
);
?>

<h1>Update ComptencyFunctional <?php echo $model->function_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>