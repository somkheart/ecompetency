<?php
/* @var $this TmpFunctionController */
/* @var $model TmpFunction */

$this->breadcrumbs=array(
	'Tmp Functions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TmpFunction', 'url'=>array('index')),
	array('label'=>'Manage TmpFunction', 'url'=>array('admin')),
);
?>

<h1>Create TmpFunction</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>