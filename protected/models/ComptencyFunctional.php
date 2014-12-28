<?php

/**
 * This is the model class for table "comptency_functional".
 *
 * The followings are the available columns in table 'comptency_functional':
 * @property integer $funct_id
 * @property string $funct_name
 * @property integer $function_status
 */
class ComptencyFunctional extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'comptency_functional';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('function_status', 'numerical', 'integerOnly' => true),
            array('function_name','required'), 
            array('function_name', 'length', 'max' => 255),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('function_id, function_name, function_status', 'safe', 'on' => 'search'),
        );
    }

    public function actionComptencyFunctionalJson() {
        $functionList = ComptencyFunctional::model()->findAll();
        $item = array();
        $obj = new stdClass();
        $b = array();
        foreach ($functionList as $item) {
            $obj->function_id = $item->function_id;
            $obj->function_name = $item->function_name;
            $obj->function_status = $tmpUser->function_status;
            array_push($b, $obj);
        }
        echo json_encode(array("data" => $b));
        //$this->render('index');
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'function_id' => 'ไอดี',
            'function_name' => 'ชื่อฟังก์ชัน',
            'function_status' => 'สถานะ',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('function_id', $this->funct_id);
        $criteria->compare('function_name', $this->funct_name, true);
        $criteria->compare('function_status', $this->function_status);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return ComptencyFunctional the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
