<?php

class AHDController extends CAHDController {

    public function actionIndex() {
        $assessor_user = Yii::app()->user->id;
        $model = CompetencyAssessor::model()->findAll('assessor_user=:assessor_user and status=0 ', array(':assessor_user' => $assessor_user));
        $this->render('index', array('model' => $model));
    }

    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
                //'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {

        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('@'),
            )
        );
    }

    public function actionChoice($id) {
        $this->render('choice', array('id' => $id));
    }

    public function actionSave() {
        $value = $_POST['value'];
        $assessor_id = $_POST['assessor_id'];
        $comment = $_POST['comment'];
        $assessor_user = Yii::app()->user->id;
        $obj = CompetencyAssessor::model()->findByPk($assessor_id);
        while (list($competency_id, $arr) = each($value)) {
            while (list($competency_type, $item) = each($arr)) {
                $tmpComment = $comment[$competency_id][$competency_type];
                $result = new CompetencyResult();
                $result->topic_id = 1;
                $result->competency_id = $competency_id;
                $result->competency_type = $competency_type;
                $result->usercode = $obj->usercode;
                $result->assessor_user = $assessor_user;
                $result->score = $item;
                $result->comment = $tmpComment;
                $result->save();
                //    echo "Competency ID = $competency_id , competency_type = $competency_type , score = $item <br>";
            }
        }
        $obj->status = 1;
        $obj->save();
        $this->render('save');
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
