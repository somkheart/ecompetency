<?php

/**
 * This is the model class for table "comptency_functional".
 *
 * The followings are the available columns in table 'comptency_functional':
 * @property integer $function_id
 * @property string $function_name
 * @property integer $function_status
 * @property string $function_detail
 */
class ComptencyFunctional extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'comptency_functional';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('function_detail', 'required'),
			array('function_status', 'numerical', 'integerOnly'=>true),
			array('function_name', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('function_id, function_name, function_status, function_detail', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'function_id' => 'Function',
			'function_name' => 'ชื่อ Function ',
			'function_status' => 'Function Status',
			'function_detail' => 'รายละเอียด',
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
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('function_id',$this->function_id);
		$criteria->compare('function_name',$this->function_name,true);
		$criteria->compare('function_status',$this->function_status);
		$criteria->compare('function_detail',$this->function_detail,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ComptencyFunctional the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
