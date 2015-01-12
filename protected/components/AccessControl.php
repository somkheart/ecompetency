<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AccessControl extends CApplicationComponent {
    public static function isAHD(){
        if(Yii::app()->user->id){
                $model = CompetencyAdmin::model()->find('usercode=:usercode', array('usercode' =>Yii::app()->user->id));
                if(!$model){
                   return false;
                }else{
                   return true;
                }
        }else{
            return false;
        }
    }
}