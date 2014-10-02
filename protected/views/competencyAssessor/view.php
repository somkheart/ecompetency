<?php
/* @var $this CompetencyAssessorController */
/* @var $model CompetencyAssessor */

$this->breadcrumbs=array(
	'Competency Assessors'=>array('index'),
	$model->assessor_id,
);

$this->menu=array(
	array('label'=>'List CompetencyAssessor', 'url'=>array('index')),
	array('label'=>'Create CompetencyAssessor', 'url'=>array('create')),
	array('label'=>'Update CompetencyAssessor', 'url'=>array('update', 'id'=>$model->assessor_id)),
	array('label'=>'Delete CompetencyAssessor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->assessor_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CompetencyAssessor', 'url'=>array('admin')),
);
?>

<h1>View CompetencyAssessor #<?php echo $model->assessor_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'topic_id',
		'assessor_id',
		'usercode',
		'assessor_type',
		'assessor_user',
		'create_date',
		'create_by',
		'update_date',
		'update_by',
	),
)); ?>
