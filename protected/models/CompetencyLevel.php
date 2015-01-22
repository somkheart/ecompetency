<?php

/**
 * This is the model class for table "competency_level".
 *
 * The followings are the available columns in table 'competency_level':
 * @property integer $level_id
 * @property string $level_name
 * @property integer $core
 * @property integer $managerial
 * @property integer $functional
 */
class CompetencyLevel extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'competency_level';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('level_name, core, managerial, functional', 'required'),
			array('core, managerial, functional', 'numerical', 'integerOnly'=>true),
			array('level_name', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('level_id, level_name, core, managerial, functional', 'safe', 'on'=>'search'),
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
			'level_id' => ' ระดับ ',
			'level_name' => ' ระดับ ',
			'core' => 'Core',
			'managerial' => 'Managerial',
			'functional' => 'Functional',
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

		$criteria->compare('level_id',$this->level_id);
		$criteria->compare('level_name',$this->level_name,true);
		$criteria->compare('core',$this->core);
		$criteria->compare('managerial',$this->managerial);
		$criteria->compare('functional',$this->functional);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CompetencyLevel the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
