<?php
/* @var $this CompetencyAssessmentController */
/* @var $model CompetencyAssessment */

$this->breadcrumbs=array(
	'Competency Assessments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CompetencyAssessment', 'url'=>array('index')),
	array('label'=>'Manage CompetencyAssessment', 'url'=>array('admin')),
);
?>

<h1>Create CompetencyAssessment</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>