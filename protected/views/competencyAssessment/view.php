<?php
/* @var $this CompetencyAssessmentController */
/* @var $model CompetencyAssessment */

$this->breadcrumbs=array(
	'Competency Assessments'=>array('index'),
	$model->ass_id,
);

$this->menu=array(
	array('label'=>'List CompetencyAssessment', 'url'=>array('index')),
	array('label'=>'Create CompetencyAssessment', 'url'=>array('create')),
	array('label'=>'Update CompetencyAssessment', 'url'=>array('update', 'id'=>$model->ass_id)),
	array('label'=>'Delete CompetencyAssessment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ass_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CompetencyAssessment', 'url'=>array('admin')),
);
?>

<h1>View CompetencyAssessment #<?php echo $model->ass_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ass_id',
		'usercode',
		'position_name',
		'status',
		'group_id',
		'department_id',
		'division_id',
		'topic_id',
	),
)); ?>
