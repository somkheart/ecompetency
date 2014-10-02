<?php
/* @var $this CompetencyAssessorController */
/* @var $model CompetencyAssessor */

$this->breadcrumbs=array(
	'Competency Assessors'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CompetencyAssessor', 'url'=>array('index')),
	array('label'=>'Create CompetencyAssessor', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#competency-assessor-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Competency Assessors</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'competency-assessor-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'topic_id',
		'assessor_id',
		'usercode',
		'assessor_type',
		'assessor_user',
		'create_date',
		/*
		'create_by',
		'update_date',
		'update_by',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
