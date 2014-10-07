<?php
/* @var $this CompetencyAccessorTypeController */
/* @var $model CompetencyAccessorType */

$this->breadcrumbs=array(
	'Competency Accessor Types'=>array('index'),
	$model->type_id=>array('view','id'=>$model->type_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CompetencyAccessorType', 'url'=>array('index')),
	array('label'=>'Create CompetencyAccessorType', 'url'=>array('create')),
	array('label'=>'View CompetencyAccessorType', 'url'=>array('view', 'id'=>$model->type_id)),
	array('label'=>'Manage CompetencyAccessorType', 'url'=>array('admin')),
);
?>

<h1>Update CompetencyAccessorType <?php echo $model->type_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>