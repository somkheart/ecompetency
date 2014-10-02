<?php
/* @var $this CompetencyTopicController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Competency Topics',
);

$this->menu=array(
	array('label'=>'Create CompetencyTopic', 'url'=>array('create')),
	array('label'=>'Manage CompetencyTopic', 'url'=>array('admin')),
);
?>

<h1>Competency Topics</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
