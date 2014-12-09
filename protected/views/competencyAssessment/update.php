<?php
/* @var $this CompetencyAssessmentController */
/* @var $model CompetencyAssessment */

$this->breadcrumbs=array(
	'Competency Assessments'=>array('index'),
	$model->ass_id=>array('view','id'=>$model->ass_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CompetencyAssessment', 'url'=>array('index')),
	array('label'=>'Create CompetencyAssessment', 'url'=>array('create')),
	array('label'=>'View CompetencyAssessment', 'url'=>array('view', 'id'=>$model->ass_id)),
	array('label'=>'Manage CompetencyAssessment', 'url'=>array('admin')),
);
?>

<h1>Update CompetencyAssessment <?php echo $model->ass_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>