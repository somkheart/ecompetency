<?php
/* @var $this CompetencyTopicController */
/* @var $model CompetencyTopic */

$this->breadcrumbs=array(
	'Competency Topics'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CompetencyTopic', 'url'=>array('index')),
	array('label'=>'Manage CompetencyTopic', 'url'=>array('admin')),
);
?>

<h1>Create CompetencyTopic</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>