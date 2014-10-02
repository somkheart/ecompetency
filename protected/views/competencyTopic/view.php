<?php
/* @var $this CompetencyTopicController */
/* @var $model CompetencyTopic */

$this->breadcrumbs=array(
	'Competency Topics'=>array('index'),
	$model->topic_id,
);

$this->menu=array(
	array('label'=>'List CompetencyTopic', 'url'=>array('index')),
	array('label'=>'Create CompetencyTopic', 'url'=>array('create')),
	array('label'=>'Update CompetencyTopic', 'url'=>array('update', 'id'=>$model->topic_id)),
	array('label'=>'Delete CompetencyTopic', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->topic_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CompetencyTopic', 'url'=>array('admin')),
);
?>

<h1>View CompetencyTopic #<?php echo $model->topic_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'topic_id',
		'topic_name',
		'topic_status',
		'create_date',
		'create_by',
		'update_date',
		'update_by',
	),
)); ?>
