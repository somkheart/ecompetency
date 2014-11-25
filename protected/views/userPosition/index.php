<?php
/* @var $this UserPositionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Positions',
);

$this->menu=array(
	array('label'=>'Create UserPosition', 'url'=>array('create')),
	array('label'=>'Manage UserPosition', 'url'=>array('admin')),
);
?>

<h1>User Positions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
