<?php

/**
 * This is the model class for table "competency_topic".
 *
 * The followings are the available columns in table 'competency_topic':
 * @property integer $topic_id
 * @property string $topic_name
 * @property integer $topic_status
 * @property string $create_date
 * @property string $create_by
 * @property string $update_date
 * @property string $update_by
 */
class CompetencyTopic extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'competency_topic';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('topic_status', 'numerical', 'integerOnly'=>true),
			array('topic_name', 'length', 'max'=>255),
			array('create_by, update_by', 'length', 'max'=>100),
			array('create_date, update_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('topic_id, topic_name, topic_status, create_date, create_by, update_date, update_by', 'safe', 'on'=>'search'),
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
			'topic_id' => 'Topic',
			'topic_name' => 'Topic Name',
			'topic_status' => 'Topic Status',
			'create_date' => 'Create Date',
			'create_by' => 'Create By',
			'update_date' => 'Update Date',
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

		$criteria->compare('topic_id',$this->topic_id);
		$criteria->compare('topic_name',$this->topic_name,true);
		$criteria->compare('topic_status',$this->topic_status);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('create_by',$this->create_by,true);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->compare('update_by',$this->update_by,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CompetencyTopic the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
