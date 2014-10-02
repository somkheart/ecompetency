<?php
/* @var $this CompetencyTopicController */
/* @var $model CompetencyTopic */

$this->breadcrumbs=array(
	'Competency Topics'=>array('index'),
	$model->topic_id=>array('view','id'=>$model->topic_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CompetencyTopic', 'url'=>array('index')),
	array('label'=>'Create CompetencyTopic', 'url'=>array('create')),
	array('label'=>'View CompetencyTopic', 'url'=>array('view', 'id'=>$model->topic_id)),
	array('label'=>'Manage CompetencyTopic', 'url'=>array('admin')),
);
?>

<h1>Update CompetencyTopic <?php echo $model->topic_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>