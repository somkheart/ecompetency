<?php
/* @var $this TmpFunctionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tmp Functions',
);

$this->menu=array(
	array('label'=>'Create TmpFunction', 'url'=>array('create')),
	array('label'=>'Manage TmpFunction', 'url'=>array('admin')),
);
?>

<h1>Tmp Functions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
