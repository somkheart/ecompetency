<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AccessControl extends CApplicationComponent {
    public static function check_access($group){
        if(Yii::app()->user->id){
            $return = false;
            $model = Users::model()->findByAttributes(array('username'=>Yii::app()->user->name));
            if(!empty($model)){
                if(is_integer($group)){
                    if($model->group == $group){
                        $return = true;
                    }
                }
                if(is_array($group)){
                    foreach ($group as $value) {
                        if($model->group == $value){
                            $return = true;
                        }
                    }
                }
            }
            return $return;
        }else{
            return false;
        }
    }
}