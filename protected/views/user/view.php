<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->usercode,
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->usercode)),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->usercode),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>View User #<?php echo $model->usercode; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'usercode',
		'position_code',
		'firstname_th',
		'lastname_th',
		'nickname',
		'firstname_eng',
		'lastname_eng',
		'position_name',
		'tel',
		'tel1',
		'tel2',
		'mobile_number',
		'email',
		'password',
		'lastLoginTime',
		'department_id',
		'division_id',
		'group_id',
		'md5pass',
	),
)); ?>
