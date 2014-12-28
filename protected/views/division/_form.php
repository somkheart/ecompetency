<?php
/* @var $this DivisionController */
/* @var $model Division */
/* @var $form CActiveForm */
?>
<script>
    $(document).ready(function () {

        $("#Division_group_id").change(function ()
        {
            var group_id = $("#Division_group_id").val();
            var url = "<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/department/loadDivision/group_id/" + group_id;
          //  alert(url);
            $.ajax({url: url,
                success: function (result) {
                    $("#groupBox").html(result);
                }});
        }
        );
    });</script>
<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'division-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); 
    if(empty($model->status))
    {
    $model->status=1;
    }
    ?>

    <div class="row" style="padding:10px">
        <?php echo $form->labelEx($model, 'division_name'); ?>
        <?php echo $form->textField($model, 'division_name', array('size' => 30, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'division_name'); ?>
    </div>
    <div class="row" style="padding:10px">
        <?php echo $form->labelEx($model, 'group_id'); ?>
        <?php
        echo $form->dropDownList($model, "group_id", CHtml::listData(Workgroup::model()->findAll(), "group_id", "group_name"), array('style' => 'width:220px', 'style' => 'width:220px'));
        ?>
    </div>
    <div class="row" style="padding:10px">
        <?php echo $form->labelEx($model, 'department_id'); ?>
        <span id="groupBox">
            <?php echo $form->dropDownList($model, "department_id", CHtml::listData(Department::model()->findAll(), "department_id", "department_name")); ?>
        </span>
        <?php echo $form->error($model, 'department_id'); ?>
    </div>
    <div class="row" style="padding:10px">
        <?php echo $form->labelEx($model, 'status'); ?>
        <?php echo $form->radioButtonList($model, 'status', array('1' => 'Active', '2' => 'Deactive'), array('separator' => '')); ?>
        <?php echo $form->error($model, 'status'); ?>
    </div>
    <div style="padding-top:10px"></div>
    <div class="row buttons" style="padding-left: 115px">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'บันทึก' : 'บันทึก'); ?>
        <?php echo CHtml::resetButton("ยกเลิก"); ?>
    </div>
    <?php $this->endWidget(); ?>
</div><!-- form -->