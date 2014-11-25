<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property integer $usercode
 * @property string $position_code
 * @property string $firstname_th
 * @property string $lastname_th
 * @property string $nickname
 * @property string $firstname_eng
 * @property string $lastname_eng
 * @property string $position_name
 * @property string $tel
 * @property integer $tel1
 * @property integer $tel2
 * @property string $mobile_number
 * @property string $email
 * @property string $password
 * @property string $lastLoginTime
 * @property integer $department_id
 * @property integer $division_id
 * @property integer $group_id
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usercode', 'required'),
			array('id, usercode, tel1, tel2, department_id, division_id, group_id', 'numerical', 'integerOnly'=>true),
			array('position_code, firstname_th, lastname_th, nickname, firstname_eng, lastname_eng, position_name, tel, mobile_number, email, password', 'length', 'max'=>255),
			array('lastLoginTime', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, usercode, position_code, firstname_th, lastname_th, nickname, firstname_eng, lastname_eng, position_name, tel, tel1, tel2, mobile_number, email, password, lastLoginTime, department_id, division_id, group_id', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'usercode' => 'Usercode',
			'position_code' => 'Position Code',
			'firstname_th' => 'Firstname Th',
			'lastname_th' => 'Lastname Th',
			'nickname' => 'Nickname',
			'firstname_eng' => 'Firstname Eng',
			'lastname_eng' => 'Lastname Eng',
			'position_name' => 'Position Name',
			'tel' => 'Tel',
			'tel1' => 'Tel1',
			'tel2' => 'Tel2',
			'mobile_number' => 'Mobile Number',
			'email' => 'Email',
			'password' => 'Password',
			'lastLoginTime' => 'Last Login Time',
			'department_id' => 'Department',
			'division_id' => 'Division',
			'group_id' => 'Group',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('usercode',$this->usercode);
		$criteria->compare('position_code',$this->position_code,true);
		$criteria->compare('firstname_th',$this->firstname_th,true);
		$criteria->compare('lastname_th',$this->lastname_th,true);
		$criteria->compare('nickname',$this->nickname,true);
		$criteria->compare('firstname_eng',$this->firstname_eng,true);
		$criteria->compare('lastname_eng',$this->lastname_eng,true);
		$criteria->compare('position_name',$this->position_name,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('tel1',$this->tel1);
		$criteria->compare('tel2',$this->tel2);
		$criteria->compare('mobile_number',$this->mobile_number,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('lastLoginTime',$this->lastLoginTime,true);
		$criteria->compare('department_id',$this->department_id);
		$criteria->compare('division_id',$this->division_id);
		$criteria->compare('group_id',$this->group_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
