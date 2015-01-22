<?php

class CompetencyAssessmentController extends Controller
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
        public function actionRead()
        {
            $tmpObjectList=  CompetencyAssessment::model()->findAll();
            $tmpData = array();
            $b = array();
            $index=1;
            foreach ($tmpObjectList as $tmpObject) {
                $obj = new stdClass();
                $obj->ass_id = $tmpObject->ass_id;
                $obj->usercode = $tmpObject->usercode;
                $obj->position_name=$tmpObject->position_name;
                $obj->status=$tmpObject->status;
                $obj->topic_id=$tmpObject->topic_id;
                $obj->position_id=$tmpObject->position_id;
                $usercode=$tmpObject->usercode;
                $tmpUser=User::model()->findByPk($usercode);
                if($tmpUser!=null){
                    $tmpName=$tmpUser->firstname_th . " " .$tmpUser->lastname_th;
                    $position_code=$tmpUser->position_code;
                }else
                {
                    $tmpName="Not Found in Database";
                    $position_code=" Not Found in database";
                }
                    
                
                // ตำแหน่ง 
                $tmpPosition= UserPosition::model()->find('position_code=:position_code',array('position_code'=>$position_code));
                if($tmpPosition!=null){
                    $obj->position_name=$tmpPosition->position_name;
                    $obj->fullname=$tmpName;
                }else{
                    $obj->position_name="";
                    $obj->fullname="";
                }
                
               
                

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
          
		$model=new CompetencyAssessment;
                
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['CompetencyAssessment']))
		{
                    
                      
                   	$model->attributes=$_POST['CompetencyAssessment'];
                        $model->topic_id=1;
                    //    $model->position_id=$_POST
			if($model->save()){
				$this->redirect(array('view','id'=>$model->ass_id));
                                
                              //  $userlist=array('571007','571012','571003','521004','521005','521010');
                                foreach($userlist as $tmpUser)
                                {
                                    $obj=new CompetencyAssessor();
                                    $obj->topic_id=1;
                                    $obj->usercode=$tmpUser;
                                    $obj->assessor_user="571007";
                                    $obj->status=0; 
                                    $obj->save();
                                }
                              
                        }
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
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['CompetencyAssessment']))
		{
			$model->attributes=$_POST['CompetencyAssessment'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ass_id));
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
		$dataProvider=new CActiveDataProvider('CompetencyAssessment');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new CompetencyAssessment('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['CompetencyAssessment']))
			$model->attributes=$_GET['CompetencyAssessment'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return CompetencyAssessment the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=CompetencyAssessment::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CompetencyAssessment $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='competency-assessment-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
