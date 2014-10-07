<?php

/**
 * This is the model class for table "competency_accessor_type".
 *
 * The followings are the available columns in table 'competency_accessor_type':
 * @property integer $type_id
 * @property string $type_name
 * @property integer $score
 * @property integer $core_flag
 * @property integer $managerial_flag
 * @property integer $function_flag
 */
class CompetencyAccessorType extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'competency_accessor_type';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('score, core_flag, managerial_flag, function_flag', 'numerical', 'integerOnly'=>true),
			array('type_name', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('type_id, type_name, score, core_flag, managerial_flag, function_flag', 'safe', 'on'=>'search'),
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
			'type_id' => 'Type',
			'type_name' => 'Type Name',
			'score' => 'Score',
			'core_flag' => 'Core Flag',
			'managerial_flag' => 'Managerial Flag',
			'function_flag' => 'Function Flag',
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

		$criteria->compare('type_id',$this->type_id);
		$criteria->compare('type_name',$this->type_name,true);
		$criteria->compare('score',$this->score);
		$criteria->compare('core_flag',$this->core_flag);
		$criteria->compare('managerial_flag',$this->managerial_flag);
		$criteria->compare('function_flag',$this->function_flag);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CompetencyAccessorType the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
