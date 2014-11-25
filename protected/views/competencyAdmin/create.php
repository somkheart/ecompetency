<?php
/* @var $this CompetencyAdminController */
/* @var $model CompetencyAdmin */

$this->breadcrumbs=array(
	'Competency Admins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CompetencyAdmin', 'url'=>array('index')),
	array('label'=>'Manage CompetencyAdmin', 'url'=>array('admin')),
);
?>

<h1>Create CompetencyAdmin</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>