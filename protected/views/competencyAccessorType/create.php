<?php
/* @var $this CompetencyAccessorTypeController */
/* @var $model CompetencyAccessorType */

$this->breadcrumbs=array(
	'Competency Accessor Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CompetencyAccessorType', 'url'=>array('index')),
	array('label'=>'Manage CompetencyAccessorType', 'url'=>array('admin')),
);
?>

<h1>Create CompetencyAccessorType</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>