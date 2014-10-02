<?php
/* @var $this EmployeeController */
/* @var $model Employee */

$this->breadcrumbs=array(
	'Employees'=>array('index'),
	$model->Name=>array('view','id'=>$model->employee_code),
	'Update',
);

$this->menu=array(
	array('label'=>'List Employee', 'url'=>array('index')),
	array('label'=>'Create Employee', 'url'=>array('create')),
	array('label'=>'View Employee', 'url'=>array('view', 'id'=>$model->employee_code)),
	array('label'=>'Manage Employee', 'url'=>array('admin')),
);
?>

<h1>Update Employee <?php echo $model->employee_code; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>