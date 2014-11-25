<?php
/* @var $this CompetencyFunctionListController */
/* @var $model CompetencyFunctionList */

$this->breadcrumbs=array(
	'Competency Function Lists'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CompetencyFunctionList', 'url'=>array('index')),
	array('label'=>'Manage CompetencyFunctionList', 'url'=>array('admin')),
);
?>

<h1>Create CompetencyFunctionList</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>