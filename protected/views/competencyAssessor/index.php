<?php
/* @var $this CompetencyAssessorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Competency Assessors',
);

$this->menu=array(
	array('label'=>'Create CompetencyAssessor', 'url'=>array('create')),
	array('label'=>'Manage CompetencyAssessor', 'url'=>array('admin')),
);
?>

<h1>Competency Assessors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
