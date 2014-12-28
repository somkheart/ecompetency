<?php
/* @var $this TmpFunctionController */
/* @var $model TmpFunction */

$this->breadcrumbs=array(
	'Tmp Functions'=>array('index'),
	$model->tmp_id=>array('view','id'=>$model->tmp_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TmpFunction', 'url'=>array('index')),
	array('label'=>'Create TmpFunction', 'url'=>array('create')),
	array('label'=>'View TmpFunction', 'url'=>array('view', 'id'=>$model->tmp_id)),
	array('label'=>'Manage TmpFunction', 'url'=>array('admin')),
);
?>

<h1>Update TmpFunction <?php echo $model->tmp_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>