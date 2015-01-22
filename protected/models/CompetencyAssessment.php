<?php

/**
 * This is the model class for table "competency_assessment".
 *
 * The followings are the available columns in table 'competency_assessment':
 * @property integer $ass_id
 * @property string $usercode
 * @property string $position_name
 * @property integer $status
 * @property integer $group_id
 * @property integer $department_id
 * @property integer $division_id
 * @property integer $topic_id
 */
class CompetencyAssessment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
        public $username;
	public function tableName()
	{
		return 'competency_assessment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('status, topic_id', 'numerical', 'integerOnly'=>true),
			array('usercode, position_name', 'length', 'max'=>100),
          
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ass_id, usercode, position_name, status, group_id, department_id, division_id, topic_id', 'safe', 'on'=>'search'),
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
			'ass_id' => 'Ass',
			'usercode' => ' รหัสเจ้าหน้าที่ (ผู้ถูกประเมิน ) ',
			'position_name' => ' ตำแหน่ง ',
			'status' => 'Status',
			'topic_id' => ' หัวข้อการประเมิน ',
                        'position_id'=>' ตำแหน่ง ',
                        'level_id'=>'ระดับ',
                        'function_id'=>'Functional Competency ',
                        'core_flag'=>'Core Competency ',
                        'manage_flag'=>'Managerial Competency '
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

		$criteria->compare('ass_id',$this->ass_id);
		$criteria->compare('usercode',$this->usercode,true);
		$criteria->compare('position_name',$this->position_name,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('group_id',$this->group_id);
		$criteria->compare('department_id',$this->department_id);
		$criteria->compare('division_id',$this->division_id);
		$criteria->compare('topic_id',$this->topic_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CompetencyAssessment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
