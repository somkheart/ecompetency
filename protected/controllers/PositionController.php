<?php

class PositionController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
        public function actionCreate()
        {
                
        }
        public function actionJson()
        {
            $position=UserPosition::model()->findAll();
             $tmpData=array();
                $b = array();
                $index=1;
                foreach($position as $tmpUser)
                {
                    $obj = new stdClass();
                    $obj->index=$index++;
                    $obj->position_code=$tmpUser->position_code;
                    $obj->position_name=$tmpUser->position_name;
                    $obj->level=$tmpUser->level;
                    array_push($b,$obj);
                }
                echo json_encode(array("data" => $b));
          //  print_r($position);
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