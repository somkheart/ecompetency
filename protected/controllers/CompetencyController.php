<?php

class CompetencyController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
        public function actionCoreCompetencyJsonAll($id)
	{
          
            $position = Competency::model()->findAll();
            $tmpData = array();
            $b = array();
            foreach ($position as $tmpUser) {
                if($tmpUser->competency_type!=3){
                $obj = new stdClass();
                $obj->competency_id = $tmpUser->competency_id;
                $obj->competency_name = $tmpUser->competency_name;
                $obj->competency_type = $tmpUser->competency_type;
                $obj->maxvalue="3";
                array_push($b, $obj);
                }
            }
            $mp=CompetencyFunctionList::model()->findAllByAttributes(array('function_id'=>78));
             foreach ($mp as $tmpUser) {
                $obj = new stdClass();
                $obj->competency_id = $tmpUser->flist_id;
                $obj->competency_name = $tmpUser->flist_name;
                $obj->competency_type = 3;
                $obj->maxvalue="3";
                array_push($b, $obj);
            }
             echo json_encode(array("data" => $b));
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
}