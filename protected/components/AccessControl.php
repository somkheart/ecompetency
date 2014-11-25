<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AccessControl extends CApplicationComponent {
    public static function check_access($group){
        if(Yii::app()->user->id){
                $model = CompetencyAdmin::model()->findByAttributes(array('usercode'=>Yii::app()->user->id));
                if(!$model){
                   return true;
                }else{
                   return false;
                }
        }else{
            return false;
        }
    }
}