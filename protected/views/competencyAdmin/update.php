<?php
/* @var $this CompetencyAdminController */
/* @var $model CompetencyAdmin */

$this->breadcrumbs=array(
	'Competency Admins'=>array('index'),
	$model->usercode=>array('view','id'=>$model->usercode),
	'Update',
);

$this->menu=array(
	array('label'=>'List CompetencyAdmin', 'url'=>array('index')),
	array('label'=>'Create CompetencyAdmin', 'url'=>array('create')),
	array('label'=>'View CompetencyAdmin', 'url'=>array('view', 'id'=>$model->usercode)),
	array('label'=>'Manage CompetencyAdmin', 'url'=>array('admin')),
);
?>

<h1>Update CompetencyAdmin <?php echo $model->usercode; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>