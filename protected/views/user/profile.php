<div class="form k-content" style="margin-top: 0px" >

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

    <div class="row k-content" style="padding:10px">
        <?php echo $form->labelEx($model, 'usercode'); ?>
        <?php echo $form->textField($model, 'usercode', array('class' => 'k-input k-textbox', 'style' => 'width:200px','readonly'=>'true')); ?>
        <?php echo $form->error($model, 'usercode'); ?>
    </div>
    <div class="row k-content"  style="padding:10px">
        <?php echo $form->labelEx($model, 'password'); ?>
        <?php echo $form->passwordField($model, 'password', array('size' => 60, 'maxlength' => 255, 'class' => 'k-input k-textbox', 'style' => 'width:200px')); ?>
        <?php echo $form->error($model, 'password'); ?>
    </div>

    <div class="row k-content"  style="padding:10px">
        <?php echo $form->labelEx($model, 'email'); ?>
        <?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 255, 'class' => 'k-input k-textbox', 'style' => 'width:200px','readonly'=>'true')); ?>
        <?php echo $form->error($model, 'email'); ?>
    </div>
    <div class="row k-content"  style="padding:10px">

        <span>
            <?php echo $form->labelEx($model, 'firstname_th'); ?>
            <?php echo $form->textField($model, 'firstname_th', array('size' => 60, 'maxlength' => 255, 'class' => 'k-input k-textbox', 'style' => 'width:200px','readonly'=>'true')); ?>
            <?php echo $form->error($model, 'firstname_th'); ?>
        </span>
        <span>
            <?php echo $form->labelEx($model, 'lastname_th', array('style' => 'width:200px; text-align:right; padding-right:20px')); ?>
            <?php echo $form->textField($model, 'lastname_th', array('size' => 60, 'maxlength' => 255, 'class' => 'k-input k-textbox', 'style' => 'width:200px','readonly'=>'true')); ?>
            <?php echo $form->error($model, 'lastname_th'); ?>
        </span>

    </div>

    <div class="row k-content"  style="padding:10px">
        <span>
            <?php echo $form->labelEx($model, 'firstname_eng'); ?>
            <?php echo $form->textField($model, 'firstname_eng', array('size' => 60, 'maxlength' => 255, 'class' => 'k-input k-textbox', 'style' => 'width:200px','readonly'=>'true')); ?>
            <?php echo $form->error($model, 'firstname_eng'); ?>
        </span>
        <span>
            <?php echo $form->labelEx($model, 'lastname_eng', array('style' => 'width:200px; text-align:right; padding-right:20px')); ?>
            <?php echo $form->textField($model, 'lastname_eng', array('size' => 60, 'maxlength' => 255, 'class' => 'k-input k-textbox', 'style' => 'width:200px','readonly'=>'true')); ?>
            <?php echo $form->error($model, 'lastname_eng'); ?>
        </span>
    </div>



    <div class="row"  style="padding:10px;display: none">
        <?php echo $form->labelEx($model, 'lastLoginTime'); ?>
        <?php echo $form->textField($model, 'lastLoginTime', array('size' => 60, 'maxlength' => 255, 'class' => 'k-input k-textbox', 'style' => 'width:200px')); ?>
        <?php echo $form->error($model, 'lastLoginTime'); ?>
    </div>
    <div class="row buttons"  style="padding:10px;text-align: center;">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'สร้าง' : 'บันทึก', array('class' => 'k-button')); ?>
        <?php echo CHtml::resetButton('ยกเลิก', array('class' => 'k-button')); ?>
    </div>
    <?php $this->endWidget(); ?>

</div>
<script>
    $(document).ready(function () {
        $("#menu").kendoMenu();

    });
    $("#button,#reset").kendoButton({
        enable: true
    });
   
</script>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

