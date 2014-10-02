<?php

/**
 * This is the model class for table "competency".
 *
 * The followings are the available columns in table 'competency':
 * @property integer $competency_id
 * @property string $competency_name
 * @property integer $competency_type
 * @property string $create_date
 * @property string $create_by
 * @property string $upate_date
 * @property string $update_by
 */
class Competency extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'competency';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('competency_type', 'numerical', 'integerOnly'=>true),
			array('competency_name', 'length', 'max'=>255),
			array('create_by, update_by', 'length', 'max'=>100),
			array('create_date, upate_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('competency_id, competency_name, competency_type, create_date, create_by, upate_date, update_by', 'safe', 'on'=>'search'),
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
			'competency_id' => 'Competency',
			'competency_name' => 'Competency Name',
			'competency_type' => 'Competency Type',
			'create_date' => 'Create Date',
			'create_by' => 'Create By',
			'upate_date' => 'Upate Date',
			'update_by' => 'Update By',
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

		$criteria->compare('competency_id',$this->competency_id);
		$criteria->compare('competency_name',$this->competency_name,true);
		$criteria->compare('competency_type',$this->competency_type);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('create_by',$this->create_by,true);
		$criteria->compare('upate_date',$this->upate_date,true);
		$criteria->compare('update_by',$this->update_by,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Competency the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
