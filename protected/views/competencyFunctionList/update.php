<?php
/* @var $this CompetencyFunctionListController */
/* @var $model CompetencyFunctionList */

$this->breadcrumbs=array(
	'Competency Function Lists'=>array('index'),
	$model->flist_id=>array('view','id'=>$model->flist_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CompetencyFunctionList', 'url'=>array('index')),
	array('label'=>'Create CompetencyFunctionList', 'url'=>array('create')),
	array('label'=>'View CompetencyFunctionList', 'url'=>array('view', 'id'=>$model->flist_id)),
	array('label'=>'Manage CompetencyFunctionList', 'url'=>array('admin')),
);
?>

<h1>Update CompetencyFunctionList <?php echo $model->flist_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>