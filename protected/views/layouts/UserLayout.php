<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/kendoUI/styles/kendo.common.min.css" rel="stylesheet"/>
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/kendoUI/styles/kendo.default.min.css" rel="stylesheet"/>
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/kendoUI/styles/kendo.dataviz.min.css" rel="stylesheet"/>
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/kendoUI/styles/kendo.dataviz.default.min.css" rel="stylesheet"/>
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/styles/default.css" rel="stylesheet"/>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/css/kendoUI/js/jquery.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/css/js/angular.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/css/kendoUI/js/kendo.all.min.js"></script>
    </head>
    <body>

        <div id="example ">
            <div class="leftImage"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/styles/header.png" height="110" ></div>
            <ul id="menu" style="text-align: right;">
                <li style="float:right;">
                    <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/logout">ออกจากระบบ</a>
                </li>
                <li style="float:right;">
                    <a href='<?php echo Yii::app()->request->baseUrl; ?>/user/profile'>ข้อมูลส่วนตัว</a>
                </li>
                <li style="float:right; width:500px;" onclick="location.href='<?php echo Yii::app()->request->baseUrl; ?>/ahd'">
                    <b>ผู้ประเมิน : </b><?php echo Yii::app()->user->getName(); ?>
                </li>
                
            </ul>
           
            <?php echo $content; ?>
     

    </body>
</html>
