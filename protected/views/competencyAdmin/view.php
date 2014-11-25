<?php
/* @var $this CompetencyAdminController */
/* @var $model CompetencyAdmin */

$this->breadcrumbs=array(
	'Competency Admins'=>array('index'),
	$model->usercode,
);

$this->menu=array(
	array('label'=>'List CompetencyAdmin', 'url'=>array('index')),
	array('label'=>'Create CompetencyAdmin', 'url'=>array('create')),
	array('label'=>'Update CompetencyAdmin', 'url'=>array('update', 'id'=>$model->usercode)),
	array('label'=>'Delete CompetencyAdmin', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->usercode),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CompetencyAdmin', 'url'=>array('admin')),
);
?>

<h1>View CompetencyAdmin #<?php echo $model->usercode; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'usercode',
		'user_type',
	),
)); ?>
