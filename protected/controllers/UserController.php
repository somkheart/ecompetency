<?php

class UserController extends Controller {

    public function actionIndex() {
        $this->render('index');
    }

    public function actionJson() {

        $user = User::model()->findAll();
        $tmpData = array();
        $b = array();
        foreach ($user as $tmpUser) {
            $obj = new stdClass();
            $obj->usercode = $tmpUser->usercode;
            $obj->firstname_th = $tmpUser->firstname_th;
            $obj->lastname_th = $tmpUser->lastname_th;
            $obj->position_code = $tmpUser->position_code;
            $obj->position_name = $tmpUser->position_name;
            $obj->email = $tmpUser->email;
            array_push($b, $obj);
        }
        echo json_encode(array("data" => $b));
    }

    public function actionAHDJson() {
        $user = User::model()->findAll();
        $tmpData = array();
        $b = array();
        foreach ($user as $tmpUser) {
            $obj = new stdClass();
            $obj->usercode = $tmpUser->usercode;
            $obj->firstname_th = $tmpUser->firstname_th;
            $obj->lastname_th = $tmpUser->lastname_th;
            $obj->position_code = $tmpUser->position_code;
            $obj->position_name = $tmpUser->position_name;
            $obj->email = $tmpUser->email;
            array_push($b, $obj);
        }
        echo json_encode(array("data" => $b));
    }

    public function actionAdminJson() {

        $user = User::model()->findAll();
        $tmpData = array();
        $b = array();
        foreach ($user as $tmpUser) {
            $obj = new stdClass();
            $obj->usercode = $tmpUser->usercode;
            $obj->firstname_th = $tmpUser->firstname_th;
            $obj->lastname_th = $tmpUser->lastname_th;
            $obj->position_code = $tmpUser->position_code;
            $obj->position_name = $tmpUser->position_name;
            $obj->email = $tmpUser->email;
            array_push($b, $obj);
        }
        echo json_encode(array("data" => $b));
    }

    public function actionCreate() {
        $this->render('create');
    }

    public function actionUpdate() {
        $models=$_GET['models'];
        $data = json_decode($models);
        $tmpObject = $data[0];
        $usercode = $tmpObject->usercode;
        $firstname_th = $tmpObject->firstname_th;
        $lastname_th=$tmpObject->lastname_th;
        $position_name=$tmpObject->position_name;
        $model = $this->loadModel($usercode);
        $model->attributes = $usercode;
        $model->firstname_th = $firstname_th;
        $model->lastname_th = $lastname_th;
        $model->position_name = $position_name;
        $b = array();
        if ($model->save()) {
            $obj = new stdClass();
            $obj->usercode = $usercode;
            $obj->firstname_th = $firstname_th;
             $obj->lastname_th = $lastname_th;
            array_push($b, $obj);
            echo json_encode(array("data" => $b));
        } else {
            echo json_encode(array("data" => array()));
        }
        exit();
    }

    public function loadModel($id) {
        $model = User::model()->findByPk($id);
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
