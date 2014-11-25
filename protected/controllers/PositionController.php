<?php

class PositionController extends Controller {

    public function actionIndex() {
        $this->render('index');
    }

    public function actionCreate() {
        $this->render('index');
    }

    public function actionJson() {
        $position = UserPosition::model()->findAll();
        $tmpData = array();
        $b = array();
        $index = 1;
        foreach ($position as $tmpUser) {
            $obj = new stdClass();
            $obj->index = $index++;
            $obj->position_code = $tmpUser->position_code;
            $obj->position_name = $tmpUser->position_name;
            $obj->level = $tmpUser->level;
            array_push($b,$obj);
        }
        echo json_encode(array("data" => $b));
    }

    public function actionUpdate() {
        $models = $_GET['models'];
        $data = json_decode($models);
        $tmpObject = $data[0];
        $position_code = $tmpObject->position_code;
        $position_name = $tmpObject->position_name;
        $level = $tmpObject->level;
        $model = $this->loadModel($position_code);
        $model->attributes = $position_code;
        $model->position_code = $position_code;
        $model->position_name = $position_name;
        $model->level = $level;
        $b = array();

        if ($model->save()) {
            $obj = new stdClass();
            $obj->position_code = $position_code;
            $obj->position_name = $position_name;
            $obj->level=$level;
            array_push($b, $obj);
            echo json_encode(array("data" => $b));
        } else {
            echo json_encode(array("data" => array()));
        }
        exit();
    }

    public function loadModel($id) {
        $model = UserPosition::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
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
