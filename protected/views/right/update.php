<?php
/* @var $this RightController */
/* @var $model Right */

$this->breadcrumbs=array(
	'Rights'=>array('index'),
	$model->right_id=>array('view','id'=>$model->right_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Right', 'url'=>array('index')),
	array('label'=>'Create Right', 'url'=>array('create')),
	array('label'=>'View Right', 'url'=>array('view', 'id'=>$model->right_id)),
	array('label'=>'Manage Right', 'url'=>array('admin')),
);
?>

<h1>Update Right <?php echo $model->right_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>