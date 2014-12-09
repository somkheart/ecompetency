<?php
/* @var $this DepartmentController */
/* @var $model Department */

$this->breadcrumbs = array(
    'Departments' => array('index'),
    $model->department_id => array('view', 'id' => $model->department_id),
    'Update',
);
/*
  $this->menu = array(
  array('label' => 'List Department', 'url' => array('index')),
  array('label' => 'Create Department', 'url' => array('create')),
  array('label' => 'View Department', 'url' => array('view', 'id' => $model->department_id)),
  array('label' => 'Manage Department', 'url' => array('admin')),
  );
 * 
 */
?>

<h1> แก้ไขข้อมูล</h1>

<?php
//$this->renderPartial('_form', array('model' => $model)); 
?>

<div class="form">
    <?php echo CHtml::beginForm(); ?>

    <?php echo CHtml::errorSummary($model); ?>

    <div class="row" style="padding:10px">
        <?php echo CHtml::activeHiddenField($model, 'department_id', array("class" => "k-textbox")) ?>
    </div>
    <div class="row" style="padding:10px" >
        <?php echo CHtml::activeLabel($model, 'department_name'); ?>
        <?php echo CHtml::activeTelField($model, 'department_name', array("class" => "k-textbox","style"=>"width:250px")) ?>
    </div>
    <div class="row" style="padding:10px" >
        <?php echo CHtml::activeLabel($model, 'group_id'); ?>
        <?php echo CHtml::activeDropDownList($model, 'group_id', CHtml::listData(Workgroup::model()->findAll(), 'group_id', 'group_name'), array('class' => 'k-i-arrow-s k-input','style'=>'width:250px')); ?>
    </div>
    <div class="row submit" style="padding-left:115px;padding-top:10px">
        <?php echo CHtml::submitButton('บันทึก', array('k-button'),array('style'=>'padding:20px;text-align:center')); ?>
        <?php echo CHtml::resetButton('ยกเลิก'); ?>
    </div>
    <?php echo CHtml::endForm(); ?>
</div><!-- form -->

