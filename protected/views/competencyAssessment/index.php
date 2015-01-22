<?php
/* @var $this CompetencyAssessmentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Competency Assessments',
);
/*
$this->menu=array(
	array('label'=>'Create CompetencyAssessment', 'url'=>array('create')),
	array('label'=>'Manage CompetencyAssessment', 'url'=>array('admin')),
);
 * 
 */
?>

<h1>Competency Assessments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
