<?php

class UserController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
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
	public function accessRules()
	{
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
             * 
             */
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
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new User;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->usercode));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($usercode)
	{
                $id=$usercode;
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->usercode));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('User');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new User('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['User']))
			$model->attributes=$_GET['User'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return User the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=User::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param User $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
       public function actionLoadDivision($group_id) {
        $model = Department::model()->findByAttributes(array('group_id' => $group_id));
        echo CHtml::activeDropDownList($model, 'department_id', CHtml::listData(Department::model()->findAllByAttributes(array('group_id' => $group_id)), 'department_id', 'department_name'), array('class'=>'k-input','style'=>'width:200px','onchange'=>'loadData(\'1\',\'2\')','empty' => '---- เลือก ----'));
       }
}
