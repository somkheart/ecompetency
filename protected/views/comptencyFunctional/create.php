<?php
/* @var $this ComptencyFunctionalController */
/* @var $model ComptencyFunctional */

$this->breadcrumbs=array(
	'Comptency Functionals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ComptencyFunctional', 'url'=>array('index')),
	array('label'=>'Manage ComptencyFunctional', 'url'=>array('admin')),
);
?>

<h1>Create ComptencyFunctional</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>