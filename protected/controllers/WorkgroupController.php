<?php

class WorkgroupController extends Controller {

    public function actionIndex() {
        $this->render('index');
    }

    public function actionJson() {
        $condition=array("condition"=>"group_type=1");
        $position = Workgroup::model()->findAll($condition);
        $tmpData = array();
        $b = array();
        $index=1;
        foreach ($position as $tmpUser) {
            $obj = new stdClass();
            $obj->group_id = $tmpUser->group_id;
            $obj->group_name = $tmpUser->group_name;
            $obj->group_type = $tmpUser->group_type;
            $obj->index=$index++;
            array_push($b, $obj);
        }
        echo json_encode(array("data" => $b));
    }
   
    // Uncomment the following methods and override them if needed
    /*
      public function filters()
      {
      // return the filter configuration for this controller, e.g.:
      return array(
      'inlineFilterName',
      array(
      'class'=>'path.to.FilterClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }

      public function actions()
      {
      // return external action classes, e.g.:
      return array(
      'action1'=>'path.to.ActionClass',
      'action2'=>array(
      'class'=>'path.to.AnotherActionClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }
     */
}
