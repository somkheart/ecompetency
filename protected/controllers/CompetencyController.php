<?php

class CompetencyController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
        public function actionCoreCompetencyJson()
	{
            $condition=array("condition"=>"competency_type=1");
            $position = Competency::model()->findAll($condition);
            $tmpData = array();
            $b = array();
            foreach ($position as $tmpUser) {
                $obj = new stdClass();
                $obj->competency_id = $tmpUser->competency_id;
                $obj->competency_name = $tmpUser->competency_name;
                $obj->competency_type = $tmpUser->competency_type;
                array_push($b, $obj);
            }
             echo json_encode(array("data" => $b));
		//$this->render('index');
	}
         public function actionMangerialCompetencyJson()
	{
            $condition=array("condition"=>"competency_type=2");
            $position = Competency::model()->findAll($condition);
            $tmpData = array();
            $b = array();
            foreach ($position as $tmpUser) {
                $obj = new stdClass();
                $obj->competency_id = $tmpUser->competency_id;
                $obj->competency_name = $tmpUser->competency_name;
                $obj->competency_type = $tmpUser->competency_type;
                array_push($b, $obj);
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
}