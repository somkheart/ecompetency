<?php

class DivisionController extends Controller {

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

    public function actionAllJson() {
        $div = Division::model()->findAll(array('condition'=>'department_id<>1'));
        $tmpData = array();
        $b = array();
        $index = 1;
        foreach ($div as $tmpItem) {
            $obj = new stdClass();
            $obj->index = $index++;
            $obj->division_id = $tmpItem->division_id;
            $obj->division_name = $tmpItem->division_name;
            $obj->department_name= Department::model()->findByPk($tmpItem->department_id)->department_name;
            $obj->group_name=  Workgroup::model()->findByPk($tmpItem->group_id)->group_name;
            array_push($b, $obj);
        }
        echo json_encode(array("data" => $b));
    }
    public function actionDivisionByDaprtment($department_id) {
        $div = Division::model()->findAllByAttributes(array('department_id'=>$department_id));
        $tmpData = array();
        $b = array();
        $index = 1;

        foreach ($div as $tmpItem) {
            $obj = new stdClass();
            $obj->index = $index++;
            $obj->division_id = $tmpItem->division_id;
            $obj->division_name = $tmpItem->division_name;
            array_push($b, $obj);
        }
        echo json_encode(array("data" => $b));
    }

    public function actionCentralJson() {
        $condition = array("condition" => "department_id=1");
        $div = Division::model()->findAll($condition);
        $tmpData = array();
        $b = array();
        $index = 1;
        foreach ($div as $tmpItem) {
            $obj = new stdClass();
            $obj->index = $index++;
            $obj->division_id = $tmpItem->division_id;
            $obj->division_name = $tmpItem->division_name;
            array_push($b, $obj);
        }
        echo json_encode(array("data" => $b));
    }

    public function actionJsonList($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $model=$this->loadModel($id);
        $this->render('view', array(
            'model' => $model,
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Division;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Division'])) {
            $model->attributes = $_POST['Division'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->division_id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Division'])) {
            $model->attributes = $_POST['Division'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->division_id));
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
        $dataProvider = new CActiveDataProvider('Division');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Division('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Division']))
            $model->attributes = $_GET['Division'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Division the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Division::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }
    public  function LoadDepartment($id)
    {
        $deptModel= Department::model()->findByPk($id);
        return $deptModel;
    }
    public function loadWorkgroup($id) {
       $WorkgroupModel=  Workgroup::model()->findByPk($id);
       return $WorkgroupModel;
    }
    /**
     * Performs the AJAX validation.
     * @param Division $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'division-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
    public function actionLoadDivision($group_id,$department_id) {
        $model = Division::model()->findByAttributes(array('group_id' => $group_id,'department_id'=>$department_id));
        echo CHtml::activeDropDownList($model, 'division_id', CHtml::listData(Division::model()->findAllByAttributes(array('group_id' => $group_id,'department_id'=>$department_id)), 'division_id', 'division_name'), array('class'=>'k-input','style'=>'width:350px','empty' => '---- เลือก ----'));
    }
}
