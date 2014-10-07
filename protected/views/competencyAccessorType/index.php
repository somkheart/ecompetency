<?php
/* @var $this CompetencyAccessorTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Competency Accessor Types',
);

$this->menu=array(
	array('label'=>'Create CompetencyAccessorType', 'url'=>array('create')),
	array('label'=>'Manage CompetencyAccessorType', 'url'=>array('admin')),
);
?>

<h1>Competency Accessor Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
