<?php

class TmpFunctionController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        /*
          return array(
          'accessControl', // perform access control for CRUD operations
          'postOnly + delete', // we only allow deletion via POST request
          );
         * 
         */
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        /*
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
         * 
         */
    }

    public function actionRead() {
        $usercode = Yii::app()->user->id;
        $functional = TmpFunction::model()->findAllByAttributes(array('usercode' => $usercode));
        $tmpData = array();
        $b = array();
        $index = 1;
        foreach ($functional as $tmpItem) {
            $obj = new stdClass();
            $obj->usercode = $tmpItem->usercode;
            $obj->function_name = $tmpItem->function_name;
            $obj->dic1 = $tmpItem->dic1;
            $obj->dic2 = $tmpItem->dic2;
            $obj->dic3 = $tmpItem->dic3;
            $obj->dic4 = $tmpItem->dic4;
            $obj->dic5 = $tmpItem->dic5;
            $obj->index = $index++;
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
        $usercode=Yii::app()->user->id;
         $tmp_id =0;
        $function_name = $tmpObject->function_name;
        $dic1=$tmpObject->dic1;
        $dic2=$tmpObject->dic2;
        $dic3=$tmpObject->dic3;
        $dic4=$tmpObject->dic4;
        $dic5=$tmpObject->dic5;
       
        
        $model = new TmpFunction;
        $model->attributes = $tmpObject;
         $model->tmp_id = $tmp_id;
        $model->function_name = $function_name;
        $model->dic1 = $tmpObject->dic1;
        $model->dic2 = $dic2;
        $model->dic3 = $dic3;
        $model->dic4 = $dic4;
        $model->dic5 = $dic5;
        $model->usercode=$usercode;
        $b = array();
        if ($model->save()) {
            $obj = new stdClass();
          //  $obj->tmp_id = $tmp_id;
            $obj->function_name = $function_name;
            $obj->dic1=$dic1;
            $obj->dic2=$dic2;
            $obj->dic3=$dic3;
            $obj->dic4=$dic4;
            $obj->dic5=$dic5;
            array_push($b, $obj);
            echo json_encode(array("data" => $b));
        } else {
            echo json_encode(array("data" => array()));
        }
        exit();

        /*

          $model=new TmpFunction;

          // Uncomment the following line if AJAX validation is needed
          // $this->performAjaxValidation($model);
          $model->attributes=$_POST['TmpFunction'];
          $model->save();
          //$this->redirect(array('view','id'=>$model->tmp_id));

          /*
          if(isset($_POST['TmpFunction']))
          {
          $model->attributes=$_POST['TmpFunction'];
          if($model->save())
          $this->redirect(array('view','id'=>$model->tmp_id));
          }

          $this->render('create',array(
          'model'=>$model,
          ));
         * 
         */
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
        $id=$tmpObject->tmp_id;
    
        
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['TmpFunction'])) {
            $model->attributes = $_POST['TmpFunction'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->tmp_id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('TmpFunction');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new TmpFunction('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['TmpFunction']))
            $model->attributes = $_GET['TmpFunction'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return TmpFunction the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = TmpFunction::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param TmpFunction $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'tmp-function-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
