<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';
$this->breadcrumbs = array(
    'Login',
);
?>
<h1></h1>
<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'login-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
    ));
    ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'username'); ?>
        <?php echo $form->textField($model, 'username', array('class' => 'k-textbox', 'width' => '250px')); ?>
        <?php echo $form->error($model, 'username'); ?>
    </div><br/>
    <div class="row">
        <?php echo $form->labelEx($model, 'password'); ?>
        <?php echo $form->passwordField($model, 'password', array('class' => 'k-textbox', 'width' => '250px')); ?>
        <?php echo $form->error($model, 'password'); ?>
        <p class="hint">
        </p>
    </div>
    <div>
        <label>ประเภทผู้ใช้งาน</label>
        <?php echo CHtml::dropDownList("cbright", null, array('เจ้าหน้าที่', 'เจ้าหน้าที่ AHD', 'Administrator'), array('id' => "cbright","name"=>"cbright")); ?>
    </div>
    <span class="row rememberMe" >

        <br>
        <lo class="actions">
            <button type="submit" id="btnLogin" style="width:80px">Login</button>
            <button type="button" id="btnCancel" data-click='Cancel' style="width:80px">Cancel</button>
        </lo>   
    </span>

    <div class="row buttons">


        <?php $this->endWidget(); ?>
        <script>
            $("#cbright").kendoComboBox();
        </script>
    </div>