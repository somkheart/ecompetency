<?php
/* @var $this ComptencyFunctionalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Comptency Functionals',
);

$this->menu=array(
	array('label'=>'Create ComptencyFunctional', 'url'=>array('create')),
	array('label'=>'Manage ComptencyFunctional', 'url'=>array('admin')),
);
?>

<h1>Comptency Functionals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
