<?php

class CompetencyTopicController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    /*
      public function filters()
      {
      return array(
      'accessControl', // perform access control for CRUD operations
      'postOnly + delete', // we only allow deletion via POST request
      );
      }

      /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    /*
      public function accessRules()
      {
      return array(
      array('allow',  // allow all users to perform 'index' and 'view' actions
      'actions'=>array('index','view'),
      'users'=>array('*'),
      ),
      array('allow', // allow authenticated user to perform 'create' and 'update' actions
      'actions'=>array('create','update'),
      'users'=>array('@'),
      ),
      array('allow', // allow admin user to perform 'admin' and 'delete' actions
      'actions'=>array('admin','delete'),
      'users'=>array('admin'),
      ),
      array('deny',  // deny all users
      'users'=>array('*'),
      ),
      );
      }
     * 
     */
    public function actionJsonList() {
        $condition = array("condition" => "topic_status=1");
        $list = CompetencyTopic::model()->findAll($condition);
        $b = array();
        $tmpData = array();
        $b = array();
        $index = 1;
        foreach ($list as $tmpObj) {
            $obj = new stdClass();
            $obj->index = $index;
            $obj->topic_id = $tmpObj->topic_id;
            $obj->topic_name = $tmpObj->topic_name;
            $index++;
            array_push($b, $obj);
        }
        echo json_encode(array("data" => $b));
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        
       
         $models = $_GET['models'];
        $data = json_decode($models);
        $tmpObject = $data[0];
        $topic_id = $tmpObject->topic_id;
        $topic_name = $tmpObject->topic_name;
        $b = array();
        $model = new CompetencyTopic;
        $model->topic_name = $topic_name;
        $model->save();
        
        $obj = new stdClass();
        $obj->topic_id = $topic_id;
        $obj->topic_name =$topic_name;
        array_push($b, $obj);
        echo json_encode(array("data" => $b));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate() {
        $models = $_GET['models'];
        $data = json_decode($models);
        $tmpObject = $data[0];
        $b=array();
        $topic_id=$tmpObject->topic_id;
        $topic_name=$tmpObject->topic_name;
        $model = $this->loadModel($topic_id);
        $model->attributes =$model->topic_id;
        $model->topic_name=$topic_name;

        if($model->save())
        {
         $obj = new stdClass();
         $obj->topic_id = $topic_id;
         $obj->topic_name = $topic_name;
         array_push($b, $obj);
         echo json_encode(array("data" => $b));
        }else{
          echo json_encode(array("data" => array()));
        }

    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete() {
        
         $models = $_GET['models'];
        $data = json_decode($models);
        $tmpObject = $data[0];
        $b=array();
        $topic_id=$tmpObject->topic_id;
        $topic_name=$tmpObject->topic_name;
        $model = $this->loadModel($topic_id);
        $model->attributes =$model->topic_id;
        $model->topic_status=0;
        $model->save();

        
      //  $this->loadModel($id)->delete();
        /*
        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
         * 
         */
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('CompetencyTopic');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new CompetencyTopic('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['CompetencyTopic']))
            $model->attributes = $_GET['CompetencyTopic'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return CompetencyTopic the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = CompetencyTopic::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CompetencyTopic $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'competency-topic-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
