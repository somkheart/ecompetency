<?php
/* @var $this UserPositionController */
/* @var $model UserPosition */

$this->breadcrumbs=array(
	'User Positions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserPosition', 'url'=>array('index')),
	array('label'=>'Manage UserPosition', 'url'=>array('admin')),
);
?>

<h1>Create UserPosition</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>