<?php

class ComptencyFunctionalController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

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
        public function actionJsonList()
        {
            $condition = array("condition" => "function_status=1");
            $functional = ComptencyFunctional::model()->findAll($condition);
            $tmpData = array();
            $b = array();
            $index = 1;
            foreach ($functional as $tmpItem) {
                $obj = new stdClass();
                $obj->function_id =$tmpItem->function_id;
                $obj->function_name = $tmpItem->function_name;
               // $obj->function_type = $tmpItem->function_type;
                $obj->index = $index++;
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
		$model=new ComptencyFunctional;
                $flModel=new CompetencyFunctionList;
                $usercode = Yii::app()->user->id;
                $tmpModel=  TmpFunction::model()->findAllByAttributes(array('usercode'=>$usercode));

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['ComptencyFunctional'])) {
                        $model->attributes=$_POST['ComptencyFunctional'];
                        $model->function_status=1;
			if($model->save()){
                           
                            
                            foreach ($tmpModel as $item)
                            {
                                $obj=new CompetencyFunctionList;
                                $obj->attributes=$model;
                                $obj->function_id=$model->function_id;
                                $obj->flist_name=$item->function_name;
                                $obj->dic1=$item->dic1;
                                $obj->dic2=$item->dic2;
                                $obj->dic3=$item->dic3;
                                $obj->dic4=$item->dic4;
                                $obj->dic5=$item->dic5;
                                $obj->save();
				//$this->redirect(array('view','id'=>$model->function_id));
                                
                            }
                            TmpFunction::model()->deleteAllByAttributes(array('usercode'=>$usercode));
                        }
                        $this->redirect(array('success'));
		}
    
		$this->render('create',array(
			'model'=>$model,'flModel'=>$flModel
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
          
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                
		if(isset($_POST['ComptencyFunctional']))
		{
			$model->attributes=$_POST['ComptencyFunctional'];
			if($model->save())
                              $this->redirect(array('success'));
				//$this->redirect(array('view','id'=>$model->function_id));
		}
                $flModel=  CompetencyFunctionList::model()->findAll(array('condition'=>"function_id=$id"));
                
		$this->render('update',array('model'=>$model,'funclist'=>$flModel));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete()
	{
                $models = $_GET['models'];
                $data = json_decode($models);
                $tmpObject = $data[0];  
                $function_id = $tmpObject->function_id;
                $function_name = $tmpObject->function_name;
                $model = $this->loadModel($function_id);
                $model->attributes = $function_id;
                $model->function_id = $function_id;     
                $model->function_status=0;
                $b = array();
           //   $this->loadModel($function_id)->delete();
                if ($model->save()) {
                        $obj = new stdClass();
                        $obj->function_id = $function_id;
                        $obj->function_name = $function_name;
                        $obj->status=0;
                        array_push($b, $obj);
                        echo json_encode(array("data" => $b));
                } else {
                        echo json_encode(array("data" => array()));
                }
                    exit();
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		//if(!isset($_GET['ajax']))
		//	$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}
        public function actionSuccess() {
            $this->render('success');
            
        }
	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('ComptencyFunctional');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ComptencyFunctional('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ComptencyFunctional']))
			$model->attributes=$_GET['ComptencyFunctional'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return ComptencyFunctional the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=ComptencyFunctional::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param ComptencyFunctional $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='comptency-functional-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
