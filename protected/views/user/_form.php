<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>
<script>
    $(document).ready(function () {

        $("#User_group_id").change(function ()
        {
            var group_id = $(this).val();
            var url = "<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/department/loadDivision/group_id/" + group_id;
            alert(url);
            $.ajax({url: url,
                success: function (result) {
                    $("#groupBox").html(result);
                }});
        });


        $("#User_department_id").change(function ()
        {
            alert("change");
            var group_id = $("#User_group_id").val();
            var department_id = $("#User_department_id").val();
            var url = "<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/division/loadDivision/group_id/" + group_id + "/department_id/"
            department_id;
            alert(url);
            $.ajax({url: url,
                success: function (result) {
                    $("#divisionbox").html(result);
                }});
        });

    });</script>
<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'user-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row" style="padding:10px">
        <?php echo $form->labelEx($model, 'usercode'); ?>
        <?php echo $form->textField($model, 'usercode', array('class' => 'k-input k-textbox', 'style' => 'width:200px')); ?>
        <?php echo $form->error($model, 'usercode'); ?>
    </div>
    <div class="row"  style="padding:10px">
        <?php echo $form->labelEx($model, 'password'); ?>
        <?php echo $form->passwordField($model, 'password', array('size' => 60, 'maxlength' => 255, 'class' => 'k-input k-textbox', 'style' => 'width:200px')); ?>
        <?php echo $form->error($model, 'password'); ?>
    </div>

    <div class="row"  style="padding:10px">
        <?php echo $form->labelEx($model, 'email'); ?>
        <?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 255, 'class' => 'k-input k-textbox', 'style' => 'width:200px')); ?>
        <?php echo $form->error($model, 'email'); ?>
    </div>
    <div class="row"  style="padding:10px">

        <span>
            <?php echo $form->labelEx($model, 'firstname_th'); ?>
            <?php echo $form->textField($model, 'firstname_th', array('size' => 60, 'maxlength' => 255, 'class' => 'k-input k-textbox', 'style' => 'width:200px')); ?>
            <?php echo $form->error($model, 'firstname_th'); ?>
        </span>
        <span>
            <?php echo $form->labelEx($model, 'lastname_th', array('style' => 'width:200px; text-align:right; padding-right:20px')); ?>
            <?php echo $form->textField($model, 'lastname_th', array('size' => 60, 'maxlength' => 255, 'class' => 'k-input k-textbox', 'style' => 'width:200px')); ?>
            <?php echo $form->error($model, 'lastname_th'); ?>
        </span>

    </div>

    <div class="row"  style="padding:10px">
        <span>
            <?php echo $form->labelEx($model, 'firstname_eng'); ?>
            <?php echo $form->textField($model, 'firstname_eng', array('size' => 60, 'maxlength' => 255, 'class' => 'k-input k-textbox', 'style' => 'width:200px')); ?>
            <?php echo $form->error($model, 'firstname_eng'); ?>
        </span>
        <span>
            <?php echo $form->labelEx($model, 'lastname_eng', array('style' => 'width:200px; text-align:right; padding-right:20px')); ?>
            <?php echo $form->textField($model, 'lastname_eng', array('size' => 60, 'maxlength' => 255, 'class' => 'k-input k-textbox', 'style' => 'width:200px')); ?>
            <?php echo $form->error($model, 'lastname_eng'); ?>
        </span>
    </div>

    <div class="row"  style="padding:10px">
        <span>
            <?php echo $form->labelEx($model, 'nickname'); ?>
            <?php echo $form->textField($model, 'nickname', array('size' => 60, 'maxlength' => 255, 'class' => 'k-input k-textbox', 'style' => 'width:200px')); ?>
            <?php echo $form->error($model, 'nickname'); ?>
        </span>
        <span>
            <?php echo $form->labelEx($model, 'position_code', array('style' => 'width:200px; text-align:right; padding-right:20px')); ?>
            <?php echo $form->dropDownList($model, 'position_code', CHtml::listData(UserPosition::model()->findAll(), "position_code", "position_name"), array('class' => 'k-input', 'style' => 'width:300px', 'empty' => ' ---- เลือกส่วนงาน ----     ')); ?>
            <?php echo $form->error($model, 'position_code'); ?>
        </span>
    </div>  
    <div class="row"  style="padding:10px">
        <span>
            <?php echo $form->labelEx($model, 'tel'); ?>
            <?php echo $form->textField($model, 'tel', array('size' => 60, 'maxlength' => 255, 'class' => 'k-input k-textbox', 'style' => 'width:200px')); ?>
            <?php echo $form->error($model, 'tel'); ?>
        </span>
        <span>
            <?php echo $form->labelEx($model, 'tel1', array('style' => 'width:200px; text-align:right; padding-right:20px')); ?>
            <?php echo $form->textField($model, 'tel1', array('class' => 'k-input k-textbox', 'style' => 'width:200px')); ?>
            <?php echo $form->error($model, 'tel1', array('class' => 'k-input k-textbox')); ?>
        </span>
    </div>

    <div class="row"  style="padding:10px">
        <span>
            <?php echo $form->labelEx($model, 'tel2'); ?>
            <?php echo $form->textField($model, 'tel2', array('class' => 'k-input k-textbox', 'style' => 'width:200px')); ?>
            <?php echo $form->error($model, 'tel2'); ?>
        </span>
        <span>
            <?php echo $form->labelEx($model, 'mobile_number', array('style' => 'width:200px; text-align:right; padding-right:20px')); ?>
            <?php echo $form->textField($model, 'mobile_number', array('size' => 60, 'maxlength' => 255, 'class' => 'k-input k-textbox', 'style' => 'width:200px')); ?>
            <?php echo $form->error($model, 'mobile_number'); ?>
        </span>
    </div>

    <div class="row"  style="padding:10px">
        <span>
            <?php echo $form->labelEx($model, 'group_id'); ?>
            <?php echo $form->dropDownList($model, 'group_id', CHtml::listData(Workgroup::model()->findAll(), "group_id", "group_name"), array('class' => 'k-input', 'style' => 'width:200px', 'empty' => ' ----- เลือกกลุ่มงาน ----- ')); ?>
            <?php echo $form->error($model, 'group_id'); ?>
        </span>
        <span>
            <span>
                <?php echo $form->labelEx($model, 'department_id', array('style' => 'width:200px; text-align:right; padding-right:20px')); ?>
                <span id="groupBox">
                    <?php echo $form->dropDownList($model, 'department_id', CHtml::listData(Department::model()->findAll(), "department_id", "department_name"), array('class' => 'k-input', 'style' => 'width:200px', 'empty' => ' ---- เลือกฝ่าย ---- ')); ?>
                </span>
                <?php echo $form->error($model, 'department_id'); ?></span>
    </div>
    <div class="row"  style="padding:10px">
        <?php echo $form->labelEx($model, 'division_id'); ?>
        <span id="divisionbox">
            <?php echo $form->dropDownList($model, 'division_id', CHtml::listData(Division::model()->findAll(), "division_id", "division_name"), array('class' => 'k-input', 'style' => 'width:200px', 'empty' => ' ---- เลือกส่วนงาน ----     ')); ?>
        </span>
        <?php echo $form->error($model, 'division_id'); ?>
    </div>

    <div class="row"  style="padding:10px;display:none">
        <?php echo $form->labelEx($model, 'md5pass'); ?>
        <?php echo $form->textField($model, 'md5pass', array('size' => 60, 'maxlength' => 100, 'class' => 'k-input k-textbox', 'style' => 'width:350px')); ?>
        <?php echo $form->error($model, 'md5pass'); ?>
    </div>

    <div class="row"  style="padding:10px;display: none">
        <?php echo $form->labelEx($model, 'lastLoginTime'); ?>
        <?php echo $form->textField($model, 'lastLoginTime', array('size' => 60, 'maxlength' => 255, 'class' => 'k-input k-textbox', 'style' => 'width:200px')); ?>
        <?php echo $form->error($model, 'lastLoginTime'); ?>
    </div>
    <div class="row buttons"  style="padding:10px;">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'สร้าง' : 'บันทึก', array('class' => 'k-button')); ?>
    </div>
    <?php $this->endWidget(); ?>

</div><!-- form -->