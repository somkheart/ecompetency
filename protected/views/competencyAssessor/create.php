<?php
/* @var $this CompetencyAssessorController */
/* @var $model CompetencyAssessor */

$this->breadcrumbs=array(
	'Competency Assessors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CompetencyAssessor', 'url'=>array('index')),
	array('label'=>'Manage CompetencyAssessor', 'url'=>array('admin')),
);
?>

<h1>Create CompetencyAssessor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>