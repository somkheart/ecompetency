<?php

class AdminController extends CAdminController {

    public function actionIndex() {

        $this->render('index');
    }

    public function actionJson() {
        $admin = CompetencyAdmin::model()->findAll();
        $tmpData = array();
        $obj = new stdClass();
        $b = array();
        foreach ($admin as $tmpData) {
            $tmpUser = User::model()->findByAttributes(array('usercode' => $tmpData->username));
            $obj->usercode = $tmpUser->usercode;
            $obj->firstname_th = $tmpUser->firstname_eng;
            $obj->lastname_th = $tmpUser->lastname_th;
            array_push($b, $obj);
        }
        echo json_encode(array("data" => $b));
        //$this->render('index');
    }

    public function actionAdminJson() {


        $sql = "select * from competency_admin where  user_type='1'  ";
        $connection = Yii::app()->db;
        $command = $connection->createCommand($sql);
        $results = $command->queryAll();

        $b = array();
        foreach ($results as $result) {
            $usercode = $result['usercode'];
            $tmpUser = User::model()->findByAttributes(array('usercode' => $usercode));
            if ($tmpUser != null) {
                $obj = new stdClass();
                $obj->usercode = $tmpUser->usercode;
                $obj->firstname_th = $tmpUser->firstname_eng;
                $obj->lastname_th = $tmpUser->lastname_th;
                $obj->position_name = $tmpUser->position_name;
                $obj->email = $tmpUser->email;
                array_push($b, $obj);
            }
            //  $obj->usercode=$tmpUser->usercode;
            //   $obj->firstname_th=$tmpUser->firstname_eng;
            //   $obj->lastname_th=$tmpUser->lastname_th;
        }
        echo json_encode(array("data" => $b));
        //$this->render('index');
    }

    public function actionAHDJson() {


        $sql = "select * from competency_admin ";
        $connection = Yii::app()->db;
        $command = $connection->createCommand($sql);
        $results = $command->queryAll();

        $b = array();
        foreach ($results as $result) {
            $usercode = $result['usercode'];
            $tmpUser = User::model()->findByAttributes(array('usercode' => $usercode));
            if ($tmpUser != null) {
                $obj = new stdClass();
                $obj->usercode = $tmpUser->usercode;
                $obj->firstname_th = $tmpUser->firstname_eng;
                $obj->lastname_th = $tmpUser->lastname_th;
                $obj->position_name = $tmpUser->position_name;
                $obj->email = $tmpUser->email;
                array_push($b, $obj);
            }
            //  $obj->usercode=$tmpUser->usercode;
            //   $obj->firstname_th=$tmpUser->firstname_eng;
            //   $obj->lastname_th=$tmpUser->lastname_th;
        }
        echo json_encode(array("data" => $b));
        //$this->render('index');
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
    public function actionList() {
        parent::actions();
    }

}
