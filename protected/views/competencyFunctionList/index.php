<?php
/* @var $this CompetencyFunctionListController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Competency Function Lists',
);

$this->menu=array(
	array('label'=>'Create CompetencyFunctionList', 'url'=>array('create')),
	array('label'=>'Manage CompetencyFunctionList', 'url'=>array('admin')),
);
?>

<h1>Competency Function Lists</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
