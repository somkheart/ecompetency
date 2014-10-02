<?php
/* @var $this CompetencyAssessorController */
/* @var $model CompetencyAssessor */

$this->breadcrumbs=array(
	'Competency Assessors'=>array('index'),
	$model->assessor_id=>array('view','id'=>$model->assessor_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CompetencyAssessor', 'url'=>array('index')),
	array('label'=>'Create CompetencyAssessor', 'url'=>array('create')),
	array('label'=>'View CompetencyAssessor', 'url'=>array('view', 'id'=>$model->assessor_id)),
	array('label'=>'Manage CompetencyAssessor', 'url'=>array('admin')),
);
?>

<h1>Update CompetencyAssessor <?php echo $model->assessor_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>