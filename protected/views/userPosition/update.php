<?php
/* @var $this UserPositionController */
/* @var $model UserPosition */

$this->breadcrumbs=array(
	'User Positions'=>array('index'),
	$model->position_id=>array('view','id'=>$model->position_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserPosition', 'url'=>array('index')),
	array('label'=>'Create UserPosition', 'url'=>array('create')),
	array('label'=>'View UserPosition', 'url'=>array('view', 'id'=>$model->position_id)),
	array('label'=>'Manage UserPosition', 'url'=>array('admin')),
);
?>

<h1>Update UserPosition <?php echo $model->position_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>