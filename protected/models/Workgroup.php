<?php

/**
 * This is the model class for table "workgroup".
 *
 * The followings are the available columns in table 'workgroup':
 * @property integer $group_id
 * @property string $group_name
 * @property string $create_date
 * @property string $crete_by
 * @property string $update_date
 * @property string $update_by
 * @property string $group_type
 */
class Workgroup extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'workgroup';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('group_name', 'length', 'max'=>255),
			array('crete_by, update_by, group_type', 'length', 'max'=>100),
			array('create_date, update_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('group_id, group_name, create_date, crete_by, update_date, update_by, group_type', 'safe', 'on'=>'search'),
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
			'group_id' => 'Group',
			'group_name' => 'Group Name',
			'create_date' => 'Create Date',
			'crete_by' => 'Crete By',
			'update_date' => 'Update Date',
			'update_by' => 'Update By',
			'group_type' => 'Group Type',
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

		$criteria->compare('group_id',$this->group_id);
		$criteria->compare('group_name',$this->group_name,true);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('crete_by',$this->crete_by,true);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->compare('update_by',$this->update_by,true);
		$criteria->compare('group_type',$this->group_type,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Workgroup the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
