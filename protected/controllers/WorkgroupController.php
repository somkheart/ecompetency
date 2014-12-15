<?php

class WorkgroupController extends Controller {

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
          // 'postOnly + delete', // we only allow deletion via POST request
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
          array('allow',
          'actions' => array('site', 'error', 'login', 'logout'),
          'users' => array('*'),
          ),
          array('allow',
          'actions' => array('json', 'View', 'Create', 'Update', 'Delete', 'Index', 'Admin'), // กำหนดสิทธิ์เข้าใช้งาน actionContact
          'expression' => 'AccessControl::check_access(array(1,2))', // ได้เฉพาะ group 1 และ 2 เท่านั่น
          ),
          array('deny',
          'users' => array('*'),
          ),
          );
         * 
         */
    }

    public function actionJson() {
        $condition = array("condition" => "group_type=1");
        $position = Workgroup::model()->findAll($condition);
        $tmpData = array();
        $b = array();
        $index = 1;
        foreach ($position as $tmpUser) {
            $obj = new stdClass();
            $obj->group_id = $tmpUser->group_id;
            $obj->group_name = $tmpUser->group_name;
            $obj->group_type = $tmpUser->group_type;
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
        $model = new Workgroup;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Workgroup'])) {
            $model->attributes = $_POST['Workgroup'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->group_id));
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
    public function actionUpdate() {
        $models = $_GET['models'];
        $data = json_decode($models);
        $tmpObject = $data[0];
        $group_id = $tmpObject->group_id;
        $group_name = $tmpObject->group_name;
        $model = $this->loadModel($group_id);
        $model->attributes = $group_id;
        $model->group_id = $group_id;
        $model->group_name = $group_name;
        $b = array();

        if ($model->save()) {
            $obj = new stdClass();
            $obj->group_id = $group_id;
            $obj->group_name = $group_name;
            array_push($b, $obj);
            echo json_encode(array("data" => $b));
        } else {
            echo json_encode(array("data" => array()));
        }
        exit();
        //   $id=1;
        //  $model = $this->loadModel($id);
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        /*
          if ($model->save())
          $this->redirect(array('view', 'id' => $model->group_id));
          /*
          if (isset($_POST['Workgroup'])) {
          print_r($_POST['Workgroup']);
          $model->attributes = $_POST['Workgroup'];
          if ($model->save())
          $this->redirect(array('view', 'id' => $model->group_id));
          }
          /*
          $this->render('update', array(
          'model' => $model,
          ));
         * 
         */
        /*
          $models=$_GET['models'];
          $data=json_decode($models);
          $tmpObject=$data[0];
          $division_id=$tmpObject->division_id;
          $division_name=$tmpObject->division_name;
          $model=$this->loadModel($division_id);

          // Uncomment the following line if AJAX validation is needed
          // $this->performAjaxValidation($model);
          $model->attributes=$division_id;
          $model->division_id=$division_id;
          $model->division_name=$division_name;
          $b=array();
          if($model->save()){
          $obj = new stdClass();
          $obj->division_id=$division_id;
          $obj->division_name=$division_name;
          array_push($b,$obj);
          echo json_encode(array("data" => $b));
          }else{
          echo json_encode(array("data" => array()));
          }
          exit();

         */
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
        $dataProvider = new CActiveDataProvider('Workgroup');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Workgroup('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Workgroup']))
            $model->attributes = $_GET['Workgroup'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Workgroup the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Workgroup::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Workgroup $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'workgroup-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    

}
