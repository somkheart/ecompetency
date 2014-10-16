<?php
/* @var $this WorkgroupController */
/* @var $model Workgroup */

$this->breadcrumbs=array(
	'Workgroups'=>array('index'),
	$model->group_id=>array('view','id'=>$model->group_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Workgroup', 'url'=>array('index')),
	array('label'=>'Create Workgroup', 'url'=>array('create')),
	array('label'=>'View Workgroup', 'url'=>array('view', 'id'=>$model->group_id)),
	array('label'=>'Manage Workgroup', 'url'=>array('admin')),
);
?>

<h1>Update Workgroup <?php echo $model->group_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>